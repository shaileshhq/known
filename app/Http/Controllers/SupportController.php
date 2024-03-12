<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $support=Support::where('delete_status',0)->get();

        return view('backend.support.index',compact('support'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.support.add_support');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $support = new Support;
        $support->title = $request->title;
        $support->short_desc = $request->short_desc;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('support'), $file_photo);
            $src= "public/support/".$file_photo;
			//compress($src, $src, 500);
            $support->image = $file_photo;
        }
        $support->save();

        return redirect()-> route('support.index')->with('success','Support N0. Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function show(Support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(Support $support)
    {
        return view('backend.support.edit_support', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Support $support)
    {
        $support->title = $request->title;
        $support->short_desc = $request->short_desc;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('support'), $file_photo);
            $src= "public/support/".$file_photo;
			//compress($src, $src, 500);
            $support->image = $file_photo;
        }
        $support->save();
        return redirect()-> route('support.index')->with('update','Support No. Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(Support $support)
    {
       $support->delete_status =1;
       $support->save();
       return redirect()-> route('support.index')->with('error','Support No. Delete Succesfull');
    }
}
