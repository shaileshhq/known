<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $award=Award::where('delete_status',0)->get();

        return view('backend.award.index',compact('award'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.award.add_award');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $award = new Award;
        $award->title = $request->title;
        $award->short_desc = $request->short_desc;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('award'), $file_photo);
            $src= "public/award/".$file_photo;
			//compress($src, $src, 500);
            $award->image = $file_photo;
        }
        $award->save();

        return redirect()-> route('award.index')->with('success','award Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {
        return view('backend.award.edit_award', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Award $award)
    {
        $award->title = $request->title;
        $award->short_desc = $request->short_desc;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('award'), $file_photo);
            $src= "public/award/".$file_photo;
			//compress($src, $src, 500);
            $award->image = $file_photo;
        }
        $award->save();
        return redirect()-> route('award.index')->with('update','Award Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
        $award->delete_status =1;
        $award->save();
        return redirect()-> route('award.index')->with('error','Award Delete Succesfull');
    }
}
