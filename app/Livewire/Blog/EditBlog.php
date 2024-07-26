<?php

namespace App\Livewire\Blog;

use App\Models\Tag;
use App\Models\Blog;
use App\Livewire\Quill;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class EditBlog extends Component
{
    use WithFileUploads;

    public $blogId;
    public $title;
    public $subtitle;
    public $body;
    public $slug;
    public $excerpt;
    public $featured_image;
    public $category_id;
    public $tag_id = [];
    public $reading_time;
    public $status;
    public $meta_description;

    protected $messages = [
        'tag_id.required' => 'At least one tag is required.',
        'category_id.required' => 'The category field is required.',
    ];

    public $listeners = [
        Quill::EVENT_VALUE_UPDATED
    ];

    public function mount($id)
    {
        $this->blogId = $id;
        $this->loadBlog();
    }

    public function loadBlog()
    {
        $blog = Blog::findOrFail($this->blogId);
        $this->title = $blog->title;
        $this->subtitle = $blog->subtitle;
        $this->body = $blog->body;
        $this->slug = $blog->slug;
        $this->excerpt = $blog->excerpt;
        $this->featured_image = $blog->featured_image;
        $this->category_id = $blog->category_id;
        $this->tag_id = $blog->tags->pluck('id')->toArray();
        $this->reading_time = $blog->reading_time;
        $this->status = $blog->status;
        $this->meta_description = $blog->meta_description;
    }

    public function quill_value_updated($value)
    {
        $this->body = $value;
    }

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'body' => 'required|string',
            'slug' => [
                'required',
                'string',
                'max:75',
                Rule::unique('blogs', 'slug')->ignore($this->blogId),
            ],
            'excerpt' => 'required|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|array',
            'tag_id.*' => 'required|exists:tags,id',
            'status' => 'required|string|in:draft,published',
            'meta_description' => 'required|string|max:255',
        ];
    }

    public function submit()
    {
        $this->validate();

        $blog = Blog::findOrFail($this->blogId);

        $directory = 'public/featured_images';
        Storage::exists($directory) || Storage::makeDirectory($directory);

        // Handle image upload if a new image is provided
        if ($this->featured_image && $this->featured_image->isValid()) {
            // Delete old image if exists
            if ($blog->featured_image) {
                Storage::delete($directory . '/' . $blog->featured_image);
            }
            $featuredImagePath = $this->featured_image->store($directory);
            $featuredImageName = basename($featuredImagePath);
        } else {
            $featuredImageName = $blog->featured_image; // Retain old image if not replaced
        }

        $blog->title = $this->title;
        $blog->subtitle = $this->subtitle;
        $blog->slug = $this->slug;
        $blog->excerpt = $this->excerpt;
        $blog->featured_image = $featuredImageName;
        $blog->body = $this->body;
        $blog->category_id = $this->category_id;
        $blog->meta_description = $this->meta_description;
        $blog->reading_time = Blog::calculateReadingTime($this->body);
        $blog->status = $this->status;

        $blog->save();
        $blog->tags()->sync($this->tag_id);

        session()->flash('success', 'Blog post updated successfully.');
        return redirect()->route('blog.index');
    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.blog.edit-blog', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
}