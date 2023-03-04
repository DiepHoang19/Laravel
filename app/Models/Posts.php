<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'thumbnail'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
