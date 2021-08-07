<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_path',
        'description',
        'date_post',
        'user_id',
    ];

    public function user()
    {
        return $this->BelongsTo( 'User::class' );
    }

    public function comment()
    {
        return $this->hasMany( 'Comment::class', 'post_id' );
    }
    public function like()
    {
        return $this->hasMany( 'Like::class', 'post_id' );
    }
}
