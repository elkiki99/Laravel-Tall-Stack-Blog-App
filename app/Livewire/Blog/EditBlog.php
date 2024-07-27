<?php

namespace App\Livewire\Blog;

use App\Models\Tag;
use App\Models\Blog;
use App\Livewire\Quill;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class EditBlog extends Component
{
    use WithFileUploads;

    public $blog;
    public $title;
    public $subtitle;
    public $body;
    public $slug;
    public $excerpt;
    public $featured_image;
    public $category_id;
    public $tag_id = [];
    public $reading_time;
    public $views;
    public $status;
    public $meta_description;

    public $listeners = [
        Quill::EVENT_VALUE_UPDATED
    ];

    public function mount($id)
    {
        $this->blog = Blog::findOrFail($id);
        $this->renderBlog($this->blog);
    }

    public function renderBlog($blog)
    {
        $this->title = $blog->title;
        $this->subtitle = $blog->subtitle;
        $this->body = $blog->body;
        $this->slug = $blog->slug;
        $this->excerpt = $blog->excerpt;
        $this->featured_image = $blog->featured_image;
        $this->category_id = $blog->category_id;
        $this->tag_id = $blog->tags->pluck('id')->toArray();
        $this->reading_time = $blog->reading_time;
        $this->views = $blog->views;
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
                Rule::unique('blogs', 'slug')->ignore($this->blog->id),
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

        $directory = 'public/featured_images';
        Storage::exists($directory) || Storage::makeDirectory($directory);

        // Handle image upload if a new image is provided
        if ($this->featured_image && $this->featured_image->isValid()) {
            if ($this->blog->featured_image) {
                Storage::delete($directory . '/' . $this->blog->featured_image);
            }
            $featuredImagePath = $this->featured_image->store($directory);
            $featuredImageName = basename($featuredImagePath);
        } else {
            $featuredImageName = $this->blog->featured_image;
        }

        $readingTime = Blog::calculateReadingTime($this->body);

        $this->blog->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'featured_image' => $featuredImageName,
            'body' => $this->body,
            'category_id' => $this->category_id,
            'meta_description' => $this->meta_description,
            'reading_time' => $readingTime,
            'status' => $this->status,
        ]);

        $this->blog->tags()->sync($this->tag_id);
        return redirect()->route('blog.index')->with('success', 'Blog post updated successfully.');
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