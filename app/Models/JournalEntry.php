<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    protected $fillable = [
        'title',
        'category',
        'date',
        'excerpt',
        'image',
        'caption',
    ];
}