<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\HomeSlider;
use App\Models\Projects;
use App\Models\ProjectByID;

class HomePageController extends Controller
{
    public function get_all_slides(Request $request)
    {
        $slides = HomeSlider::get();
        return response()->json($slides,200);
    }

    public function get_all_projects()
    {
        $projects = Projects::all();
        return response()->json($projects,200);
    }

    public function get_projects_byID($id)
    {
        $project_id = ProjectByID::leftJoin('projects','projects.id','=','project_by_i_d_s.project_id')
        ->where('projects.id', $id)
        ->select('projects.project_titles','project_by_i_d_s.*')
        ->get();
        return response()->json($project_id,200);
    }
}
