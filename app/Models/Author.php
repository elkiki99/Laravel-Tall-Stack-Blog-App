<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile_image',
        'email',
        'linkedin_profile',
        'website',
        'bio',
        'date_of_birth',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
