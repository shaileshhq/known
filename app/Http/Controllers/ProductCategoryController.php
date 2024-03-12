<?php

namespace App\Http\Controllers;
  
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //return $category= ProductCategory::where('delete_status',0)->has('category')->with('category')->get();
        $category= ProductCategory::where('delete_status',0)->get();
       return view('backend.product.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.category.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category= new ProductCategory;
        $category->title = $request->title;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();  
            $request->image->move(public_path('category'), $file_photo);
            $src= "public/category/".$file_photo;
			//compress($src, $src, 500);
            $category->image = $file_photo;
        }
        $category->save();
        return redirect()->route('category.index')->with('success','Product Category Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $ProductCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $ProductCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $ProductCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $category)
    {
       return view('backend.product.category.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $ProductCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category=ProductCategory::find($id);
        $category->title = $request->title;
        //return $gallery;
        if($request->image != null){
            $file_photo = time().'.'.request()->image->getClientOriginalExtension();  
            $request->image->move(public_path('category'), $file_photo);
            $src= "public/category/".$file_photo;
			//compress($src, $src, 500);
            $category->image = $file_photo;
        }
        $category->save();
        return redirect()->route('category.index')->with('update','Product Category Update Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $ProductCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delete_category=ProductCategory::find($id);
       $delete_category->delete_status =1;
       $delete_category->save();
       return redirect()-> route('category.index')->with('error','Category Delete Succesfull');
    }
}
