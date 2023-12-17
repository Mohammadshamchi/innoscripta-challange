<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'title',
        'content',
        'source',
        'published_at',
        'category',
        'author',
        'image_url'
    ];

    // Example of a relationship (if applicable)
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

    // You can add more functions or relationships here as needed
}
