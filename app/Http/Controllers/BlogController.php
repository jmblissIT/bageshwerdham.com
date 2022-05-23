<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\MainServices;
use Str;

class BlogController extends Controller
{
    public function get_all_blogs()
    {
        $blogs = Blogs::select('blog_title','front_image','created_at','blog_description')->get();
        return response()->json($blogs, 200);
    }

    public function get_blogs_byID($id)
    {
        $blogs_id = Blogs::select('blog_title','back_image','blog_description')->where('id',$id)->get($id);
        return response()->json($blogs_id,200);
    }

    public function get_main_services()
    {
        $main_services = MainServices::all();
        return response()->json($main_services,200);
    }

}
