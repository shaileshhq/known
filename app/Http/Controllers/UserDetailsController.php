<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Auth;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $profile= UserDetail::where('delete_status',0)->get();
        return view('backend.profile.user_profile',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetails $userDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetails $userDetails)
    {
        return $userDetails;
        return view('backend.profile.user_profile', compact('userDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetails $userDetails)
    {
        // $user_update= UserDetails::where('user_id', Auth::user()->id)->first();
        // $user_update-> dob = $request->dob;
        // $user_update-> gender = $request->gender;
        // $user_update-> phone = $request->phone;
        // $user_update-> second_phone = $request->second_phone;
        // $user_update-> country = $request->country;
        // $user_update-> state = $request->state;
        // $user_update-> district = $request->district;
        // $user_update-> pincode = $request->pincode;
        // $user_update-> full_address = $request->full_address;
        // if($request->image != null){
        //     $file_photo = time().'.'.request()->image->getClientOriginalExtension();  
        //     $request->image->move(public_path('user'), $file_photo);
        //     $user_update->image = $file_photo;
        // }
        // $user_update->save();
        // return redirect('admin/profile')->with('update','User Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetails $userDetails)
    {
        //
    }

    public function profile_update(Request $request){
        
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();  
            $request->image->move(public_path('user'), $file_photo);
            UserDetail::updateOrCreate([
                'user_id' => Auth::user()->id,],
                [ 
                    'image' => $file_photo,
                ]);
        }

        $user_data=UserDetail::updateOrCreate([
            'user_id' => Auth::user()->id,],
            [   
            'dob' => $request->dob,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'second_phone' => $request->second_phone,
            'country' => $request->country,
            'state' => $request->state,
            'district' => $request->district,
            'pincode' => $request->pincode,
            'full_address' => $request->full_address,
            ]);
            return redirect()-> route('profile.index')->with('update','User Updated Succesfull');
    }
}
