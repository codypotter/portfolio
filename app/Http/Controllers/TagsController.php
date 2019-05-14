<?php

namespace App\Http\Controllers;

use App\Project;
use App\Skill;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        $projects = Project::all();
        $skills = Skill::all();
        return view('tags.index', compact(['tags', 'projects', 'skills']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        $skills = Skill::all();
        return view('tags.create', compact(['projects', 'skills']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tag::create(request(['projectId', 'skillId', 'importance']));
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $projects = Project::all();
        $skills = Skill::all();
        return view('tags.edit', compact(['tag', 'skills', 'projects']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $tag->update(request(['projectId', 'skillId', 'importance']));
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        try{
            $tag->delete();
        } catch (\Exception $e) {
            abort(500);
        }
        return redirect('/home');
    }
}
