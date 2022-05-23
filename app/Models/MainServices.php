<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainServices extends Model
{
    use HasFactory;
    protected $table = 'main_services';
    protected $fillable = ['main_title','main_image'];
}
