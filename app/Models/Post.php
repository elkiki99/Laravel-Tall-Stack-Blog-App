<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'slug',
        'excerpt',
        'featured_image',
        'category_id',
        'reading_time',
        'views',
        'status',
        'meta_description',
        'is_featured'
    ];

    public static function calculateReadingTime($body)
    {
        $wordCount = str_word_count(strip_tags($body));
        $readingTime = ceil($wordCount / 200);
        return $readingTime;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }
}
