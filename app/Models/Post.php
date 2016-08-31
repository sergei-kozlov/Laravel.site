<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public $fillable = [
        'name',
        'email',
        'subject',
        'published_at'
    ];

    public $timestamps = true;

    protected $table = 'posts';
}
