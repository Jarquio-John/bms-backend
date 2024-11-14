<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Specify the fillable fields
    protected $fillable = [
        'title',
        'author',
        'published_year',
        'genre',
        'description',
    ];
}
