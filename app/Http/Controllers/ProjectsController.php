<?php

namespace App\Http\Controllers;

use App\Project;
use App\Tag;
use Exception;
use Illuminate\Http\Request;

class ProjectsController extends Controller {

    public function __construct() {
        $this->middleware('auth')->except(['show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {
        Project::create(request(['title', 'description', 'role', 'productPage', 'codePage', 'isComplete', 'isOpenSource', 'releaseDate', 'cost', 'imgPath']));
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project) {
        $project->update(request(['title', 'description', 'role', 'productPage', 'codePage', 'isComplete', 'isOpenSource', 'releaseDate', 'cost', 'imgPath']));
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project) {
        try {
//            delete all associated tags first
            foreach (Tag::all() as $tag) {
                if ($tag->projectId == $project->getAttribute('id')) {
                    $tag->delete();
                }
            }
            $project->delete();
        } catch (Exception $e) {
            abort(500);
        } finally {
            return redirect('/home');
        }
    }
}
