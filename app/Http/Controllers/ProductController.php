<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::where('delete_status',0)->get();

        return view('backend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prod=ProductCategory::where('delete_status',0)->get();
        return view('backend.product.add_product',compact('prod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product['slug']=str_replace(" ","-",strtolower($request->title).'-'.rand());
        $product->category_id= $request->category;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->short_desc = $request->short_desc;
        $product->image = $request->images;
        $product->gallery_image = $request->gallery_image;
        $product->pdfcatalogue = $request->pdfcatalogue;
        $product->save();
        return redirect()-> route('product.index')->with('update','Product Inserted Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
         return view('backend.product.edit_product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
         return view('backend.product.edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->title = $request->title;
        $product['slug']=str_replace(" ","-",strtolower($request->title).'-'.rand());
        $product->price = $request->price;
        $product->short_desc = $request->short_desc;
        $product->image = $request->images;
        $product->gallery_image = $request->gallery_image;
        $product->pdfcatalogue = $request->pdfcatalogue;
        $product->save();
        return redirect()-> route('product.index')->with('update','Product Updated Succesfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       $product->delete_status =1;
       $product->save();
       return redirect()-> route('product.index')->with('error','product Delete Succesfull');
    }
    
    public function convertSlug()
    {
       $list=Product::all();
       foreach($list as $data)
       {
           $title=str_replace(" ","-",strtolower($data->title));
           Product::where('id',$data->id)->update(['slug'=>$title]);
       }
    }
}
