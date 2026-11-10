<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'caption',
        'description',
        'tags',
        'image',
        'code',
        'demo',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}