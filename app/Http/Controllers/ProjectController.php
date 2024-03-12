<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project=Project::where('delete_status',0)->get();

        return view('backend.project.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.project.add_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->title = $request->title;
        $project->short_desc = $request->short_desc;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('project'), $file_photo);
            $src= "public/project/".$file_photo;
			//compress($src, $src, 500);
            $project->image = $file_photo;
        }
        $project->save();

        return redirect()-> route('project.index')->with('success','Project Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('backend.project.edit_project', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->title = $request->title;
        $project->short_desc = $request->short_desc;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('project'), $file_photo);
            $src= "public/project/".$file_photo;
			//compress($src, $src, 500);
            $project->image = $file_photo;
        }
        $project->save();
        return redirect()-> route('project.index')->with('update','Project Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete_status =1;
        $project->save();
        return redirect()-> route('project.index')->with('error','Project Delete Succesfull');
    }
}
