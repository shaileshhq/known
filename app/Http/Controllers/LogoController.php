<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $logo=Logo::where('delete_status',0)->get();
        return view('backend.logo.index', compact('logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.logo.add_logo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logo = new Logo;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();  
            $request->image->move(public_path('logo'), $file_photo);
            $src= "public/logo/".$file_photo;
			//compress($src, $src, 500);
            $logo->image = $file_photo;
        }
        $logo->save();
        return redirect()-> route('logo.index')->with('success','Logo Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
         return view('backend.logo.edit_logo', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo)
    {
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();  
            $request->image->move(public_path('logo'), $file_photo);
            $src= "public/logo/".$file_photo;
			//compress($src, $src, 500);
            $logo->image = $file_photo;
        }
        $logo->save();
        return redirect()-> route('logo.index')->with('success','logo Updated Succesfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
       $logo->delete_status =1;
       $logo->save();
       return redirect()-> route('logo.index')->with('error','Logo Delete Succesfull');
    }
}
