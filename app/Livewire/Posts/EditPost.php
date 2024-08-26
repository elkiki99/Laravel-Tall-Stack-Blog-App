<?php

namespace App\Livewire\Posts;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Mail\PostUpdated;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class EditPost extends Component
{
    use WithFileUploads;

    public $post;
    public $title;
    public $subtitle;
    public $body;
    public $slug;
    public $excerpt;
    public $featured_image;
    public $new_featured_image;
    public $category_id;
    public $tag_ids = [];
    public $reading_time;
    public $views;
    public $status;
    public $meta_description;

    public function mount($postId)
    {
        $this->post = Post::findOrFail($postId);
        $this->title = $this->post->title;
        $this->subtitle = $this->post->subtitle;
        $this->body = $this->post->body;
        $this->slug = $this->post->slug;
        $this->excerpt = $this->post->excerpt;
        $this->featured_image = $this->post->featured_image;
        $this->category_id = $this->post->category_id;
        $this->tag_ids = $this->post->tags->pluck('id')->toArray();
        $this->reading_time = $this->post->reading_time;
        $this->views = $this->post->views;
        $this->status = 'draft';
        $this->meta_description = $this->post->meta_description;
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
                Rule::unique('posts', 'slug')->ignore($this->post->id),
            ],
            'excerpt' => 'required|string|max:255',
            'new_featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'required|array',
            'tag_ids.*' => 'required|exists:tags,id',
            'status' => 'required|string|in:draft,published',
            'meta_description' => 'required|string|max:255',
        ];
    }

    public function submit()
    {
        $this->validate();

        $directory = 'public/featured_images';
        Storage::exists($directory) || Storage::makeDirectory($directory);

        if ($this->new_featured_image) {
            if ($this->post->new_featured_image) {
                Storage::delete($directory . '/' . $this->post->new_featured_image);
            }
            $featuredImagePath = $this->new_featured_image->store($directory);
            $featuredImageName = basename($featuredImagePath);
        } else {
            $featuredImageName = $this->post->featured_image;
        }

        $readingTime = Post::calculateReadingTime($this->body);

        $this->post->update([
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

        $this->post->tags()->sync($this->tag_ids);

        if(auth()->user()->role === 'author') {
            Mail::to(config('mail.from.address'))->send(new PostUpdated($this->post));
        }
        return redirect()->route('posts.pending')->with('success_updated', 'Post updated successfully.');
    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.posts.edit-post', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
}