<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ProjectByID;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = ['logo_image','project_titles','project_short_desc'];
    
  

}


