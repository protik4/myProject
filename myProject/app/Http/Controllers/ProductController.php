<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests\productRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $products = Product::all();
        return view('product.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNewProduct()
    {
        $product = new Product;
        return view('product.form')->withProduct($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postProduct(productRequest $request, Product $product)
    {
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->quantity = $request->get('quantity');
        $product->price = $request->get('price');
        
         if($request->hasFile('photo')){
                $file = $request->file('photo');
                $file_extension = $file->getClientOriginalExtension();
                $destinationPath = public_path().'/img/products/';
                $enc_file_name = str_random(12);
                $fileName = $enc_file_name . '.' . $file_extension;
                $request->file('photo')->move($destinationPath, $fileName);
                $product->photo = $fileName;
        }


       $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sellProduct(Product $product)
    {
        $existing_product = $product->quantity;
        $after_sell_quantity = $existing_product - 1;

        $product->quantity = $after_sell_quantity;
        $product->save();

        return redirect()->back();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEditProduct(Product $product)
    {
        return view('product.form')->withProduct($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteProduct(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

public function home() {
    
    $products = Product::all();

    return view('front.home')->withProducts($products);



}


}
