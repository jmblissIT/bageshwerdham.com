<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesByID extends Model
{
    use HasFactory;
    protected $table = 'services_by_i_d_s';
    protected $fillable = ['service_id','service_title','service_description'];
}
