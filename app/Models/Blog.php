<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'slug',
        'excerpt',
        'featured_image',
        'author_id',
        'category_id',
        'reading_time',
        'views',
        'is_published',
        'published_at',
        'meta_description',
    ];

    public static function calculateReadingTime($body)
    {
        $wordCount = str_word_count(strip_tags($body));
        $readingTime = ceil($wordCount / 200);
        return $readingTime;
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }

    public function images()
    {
        return $this->belongsTo(BlogImage::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
