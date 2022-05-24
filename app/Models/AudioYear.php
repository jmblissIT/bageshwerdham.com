<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioYear extends Model
{
    use HasFactory;
    protected $table = 'audio_years';
    protected $fillable = ['audio_title_id','audio_title_year'];
}
