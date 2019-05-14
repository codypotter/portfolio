<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Cody;
use App\Education;
use App\Experience;
use App\Project;
use App\Skill;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    $cody = Cody::first();
    $projects = Project::all()->sortBy('releaseDate');
    $tags = Tag::all();
    $skills = Skill::all();
    return view('index', compact(['cody', 'projects', 'tags', 'skills']));
});

Route::get('/about', function() {
    $cody = Cody::first();
    $educations = DB::table('education')->orderBy('gradDate', 'desc')->get();
    $experiences = Experience::all();
    $skills = DB::table('skills')->orderBy('proficiency', 'desc')->get();
    return view('about', compact(['educations', 'experiences', 'skills', 'cody']));
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/login', function() {
    return view('login');
});

Route::resource('projects', 'ProjectsController');

Route::resource('skills', 'SkillsController');

Route::resource('experience', 'ExperienceController');

Route::resource('education', 'EducationController');

Route::resource('tags', 'TagsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
