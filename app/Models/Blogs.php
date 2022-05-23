<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Blogs extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['blog_title','front_image','back_image','blog_description'];
    
    protected $casts = [
        'created_at' => 'datetime:d F Y',
    ];
}
