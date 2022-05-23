<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//For Get All Home Sliders Images
Route::get('get_slides', "App\Http\Controllers\HomePageController@get_all_slides");

//For Get All Projects
Route::get('get_projects', "App\Http\Controllers\HomePageController@get_all_projects");

//For Get Project By Using ID
Route::get('projects/{id}', "App\Http\Controllers\HomePageController@get_projects_byID");


//For Get All Blogs in Front
Route::get('get_blogs', "App\Http\Controllers\BlogController@get_all_blogs");

//For Get Blogs in Back By ID
Route::get('blogs/{id}', "App\Http\Controllers\BlogController@get_blogs_byID");

//For Get All Main Services on HomePage
Route::get('main_services',"App\Http\Controllers\BlogController@get_main_services");


