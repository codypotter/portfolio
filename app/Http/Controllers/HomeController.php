<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\Project;
use App\Skill;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tags = Tag::all();
        $projects = Project::all();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::all();
        return view('home', compact(['tags','projects', 'skills', 'educations', 'experiences']));
    }
}
