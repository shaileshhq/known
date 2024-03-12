<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::where('delete_status',0)->get();

        return view('backend.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->short_desc = $request->short_desc;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('slider'), $file_photo);
            $src= "public/slider/".$file_photo;
			//compress($src, $src, 500);
            $slider->image = $file_photo;
        }
        $slider->save();

        return redirect()-> route('slider.index')->with('success','Slider Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit_slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //return $request->all();
        //$slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->short_desc = $request->short_desc;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('slider'), $file_photo);
            $src= "public/slider/".$file_photo;
			//compress($src, $src, 500);
            $slider->image = $file_photo;
        }
        $slider->save();
        return redirect()-> route('slider.index')->with('update','Slider Updated Succesfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
       $slider->delete_status =1;
       $slider->save();
       return redirect()-> route('slider.index')->with('error','Slider Delete Succesfull');
    }
}
