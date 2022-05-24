<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioFiles extends Model
{
    use HasFactory;
    protected $table = 'audio_files';
    protected $fillable = ['audio_title_id','audio_year_id','audio_file'];
}
