<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    public function getPosts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'posts_categories');
    }
}
