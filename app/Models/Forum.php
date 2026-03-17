<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    // id, title, content, lang, created_at, updated_at
    protected $fillable = [
        'title',
        'author',
        'content',
        'lang'
    ];
}
