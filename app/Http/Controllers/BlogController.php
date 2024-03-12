<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
      //return $blog= Blog::select('blogs.*','blog_categories.id','blog_categories.title as cat_title')->leftjoin('blog_categories','blogs.category_id','blog_categories.id')->where('blogs.delete_status',0)->get();
       $blog=Blog::where('delete_status',0)->get();
      return view('backend.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats=BlogCategory::where('delete_status',0)->get();
        return view('backend.blog.add_blog',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $blog= new Blog;
       $blog['slug']=str_replace(" ","-",strtolower($request->title));
       $blog->title = $request->title;
       $blog->category_id= $request->category;
       $blog->short_desc = $request->short_desc;
       $blog->description = $request->description;
       if($request->image != null){
           $file_photo = time().'.'.request()->image->getClientOriginalExtension();  
           $request->image->move(public_path('blog'), $file_photo);
            $src= "public/blog/".$file_photo;
			compress($src, $src, 500);
           $blog->image = $file_photo;
       }
       $blog->save();
       return redirect()-> route('blog.index')->with('success','Blog Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('backend.blog.edit_blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $blog=Blog::find($id);
       $blog['slug']=str_replace(" ","-",strtolower($request->title));
       $blog->title = $request->title;
       $blog->short_desc = $request->short_desc;
       $blog->description = $request->description;
       if($request->image != null){
           $file_photo = time().'.'.request()->image->getClientOriginalExtension();  
           $request->image->move(public_path('blog'), $file_photo);
           $src= "public/blog/".$file_photo;
			compress($src, $src, 500);
           $blog->image = $file_photo;
       }
       $blog->save();
       return redirect()->route('blog.index')->with('update','Blog Update Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_blog=Blog::find($id);
        $delete_blog->delete_status =1;
        $delete_blog->save();
        return redirect()-> route('blog.index')->with('error','Blog Delete Succesfull');
    }
    
    public function convertSlug()
    {
       $list=Blog::all();
       foreach($list as $data)
       {
           $title=str_replace(" ","-",strtolower($data->title));
           Blog::where('id',$data->id)->update(['slug'=>$title]);
       }
    }
}
