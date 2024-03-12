<?php

namespace App\Http\Controllers;

use App\Models\Front;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Logo;
use App\Models\Award;
use App\Models\Support;
use App\Models\Project;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\Product;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::where('delete_status', 0)->orderBy('id', 'ASC')->get();
        $gallery = Gallery::where('delete_status', 0)->orderBy('id', 'DESC')->take(12)->get();
        $product = Product::where('delete_status', 0)->orderBy('id', 'DESC')->get();
        $category = ProductCategory::where('delete_status', 0)->orderBy('id', 'ASC')->get();
        $logo = Logo::where('delete_status', 0)->orderBy('id', 'DESC')->take(12)->get();
        return view('frontend.index',compact('slider','product','gallery','category','logo'));
    }

    public function about()
    {
        return view('frontend.about');
    }

     public function services()
    {
        $support = Support::where('delete_status', 0)->orderBy('id', 'DESC')->get();
        return view('frontend.services',compact('support'));
    }

    public function gallery()
    {
        $gallery = Gallery::where('delete_status', 0)->orderBy('id', 'DESC')->get();
        return view('frontend.gallery',compact('gallery'));
    }

    public function award_and_certificate()
    {
        $award = Award::where('delete_status', 0)->orderBy('id', 'DESC')->get();
        return view('frontend.award-and-certificate',compact('award'));
    }

    public function our_project()
    {
        $project = Project::where('delete_status', 0)->orderBy('id', 'DESC')->get();
        return view('frontend.project',compact('project'));
    }


    public function store_location()
    {
        return view('frontend.store');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function product()
    {
        $products = Product::where('category_id',request('id'))->where('delete_status', 0)->orderBy('id', 'ASC')->get();
        return view('frontend.product',compact('products'));
    }

    public function product_details($id)
    {
        $product = Product::where('delete_status', 0)->orderBy('id', 'DESC')->get();
        $product_detail = Product::where('slug' , $id)->first();
        return view('frontend.product-details',compact('product_detail','product'));
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
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function show(Front $front)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function edit(Front $front)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Front $front)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function destroy(Front $front)
    {
        //
    }
}
