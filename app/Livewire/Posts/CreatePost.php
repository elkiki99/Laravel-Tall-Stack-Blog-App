<?php

namespace App\Livewire\Posts;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Mail\PostCreated;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CreatePost extends Component
{   
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $body;
    public $slug;
    public $excerpt;
    public $featured_image;
    public $category_id;
    public $tag_ids = [];
    public $reading_time;
    public $views = 0;
    public $status = 'draft';
    public $meta_description;

    protected $messages = [
        'tag_ids.required' => 'At least one tag is required.',
        'category_id.required' => 'The category field is required.',
    ];

    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'body' => 'required|string',
        'slug' => 'required|string|max:75|unique:posts,slug',
        'excerpt' => 'required|string|max:255',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'category_id' => 'required|exists:categories,id',
        'tag_ids' => 'required|exists:tags,id',
        'tag_ids.*' => 'required|exists:tags,id',
        'status' => 'required|string|in:draft,published',
        'meta_description' => 'required|string|max:255',
    ];
    
    public function submit()
    {
        $this->validate();  

        $directory = 'public/featured_images';
        Storage::exists($directory) || Storage::makeDirectory($directory);
        $featuredImagePath = $this->featured_image 
        ? $this->featured_image->store($directory) 
        : null;
        $featuredImageName = $featuredImagePath ? basename($featuredImagePath) : null;

        $readingTime = Post::calculateReadingTime($this->body);

        $post = new Post([
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

        $post->author_id = auth()->id();
        $post->save();
        $post->tags()->sync($this->tag_ids);

        Mail::to('brossani23@gmail.com')->queue(new PostCreated($post));

        return redirect()->route('posts.pending')->with('success_created', 'Post created successfully.');
    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.posts.create-post', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
}
