<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Projects;

class ProjectByID extends Model
{
    use HasFactory;
    protected $table = 'project_by_i_d_s';
    protected $fillable = ['project_id','project_long_desc'];

}
