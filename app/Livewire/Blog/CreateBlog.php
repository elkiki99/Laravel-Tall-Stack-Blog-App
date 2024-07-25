<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use App\Livewire\Quill;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class CreateBlog extends Component
{   
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $body;
    public $slug;
    public $excerpt;
    public $featured_image;
    public $category_id;
    public $reading_time;
    public $views;
    public $status = 'draft';
    public $meta_description;

    public $listeners = [
        Quill::EVENT_VALUE_UPDATED
    ];

    public function quill_value_updated($value){
        $this->body = $value;
    }

    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'body' => 'required|string',
        'slug' => 'required|string|max:75|unique:blogs,slug',
        'excerpt' => 'required|string|max:255',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'category_id' => 'required|exists:categories,id',
        'status' => 'required|string|in:draft,published',
        'meta_description' => 'required|string|max:255',
    ];
    
    public function submit()
    {
        dd($this->body);
        $this->validate();

        $featuredImagePath = $this->featured_image 
            ? $this->featured_image->store('public/featured_images') 
            : null;

        $readingTime = Blog::calculateReadingTime($this->body);

        $blog = new Blog([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'featured_image' => $featuredImagePath,
            'body' => $this->body,
            'category_id' => $this->category_id,
            'meta_description' => $this->meta_description,
            'reading_time' => $readingTime,
            'status' => $this->status,
        ]);

        $blog->author_id = auth()->id();
        $blog->save();

        session()->flash('success', 'Blog post created successfully.');
        return redirect()->route('blog.index');
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.blog.create-blog', [
            'categories' => $categories
        ]);
    }
}
