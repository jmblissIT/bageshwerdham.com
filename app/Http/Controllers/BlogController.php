<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\MainServices;
use App\Models\ServicesByID;
use App\Models\Contact;
use App\Models\Audio;
use App\Models\AudioYear;
use App\Models\AudioFiles;
use Str;
use DB;

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

    public function get_service_byID($id)
    {
        $service_id = ServicesByID::leftjoin('main_services','main_services.id', '=', 'services_by_i_d_s.service_id')
        ->where('service_id', $id)
        ->select('services_by_i_d_s.*')->get();
        return response()->json($service_id,200);
    }

    public function contact()
    {
        $contact = Contact::all();
        return response()->json($contact,200); 
    }

    public function get_audio_title()
    {
        $audio_title = Audio::all();
        return response()->json($audio_title,200);
    }

    public function get_audio_year($id)
    {
        $audio_year = AudioYear::leftjoin('audio','audio.id','=','audio_years.audio_title_id')
        ->where('audio_title_id',$id)->select('audio_years.*')->get();
        return response()->json($audio_year,200);
    }
    public function get_audio_file($id)
    {
        // $audio_file = AudioFiles::leftjoin('audio_years','audio_years.id','=','audio_files.audio_year_id')
        // ->leftjoin('audio','audio.id','=','audio_files.audio_title_id')
        // ->where('audio_year_id',$id)
        // //->orWhere('audio_title_id','=','audio_years.audio_title_id')
        // ->select('audio_files.*')->get();
        $audio_file = DB::table('audio_files')
        ->join('audio_years as new_audio_years','new_audio_years.audio_title_id','=','audio_files.audio_title_id')
        ->join('audio_years as b','b.id','=','audio_files.audio_year_id')
        ->select('audio_files.*')
        //->where('audio_years.audio_title_id','=','audio_files.audio_title_id')
        ->where('audio_year_id',$id)->get();
        return response()->json($audio_file,200);
    }

}
