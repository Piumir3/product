<?php

namespace App\Http\Controllers;
//use App\Http\Resources\ProductResource;
use App\Models\Product;
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
    
        return Product::all();
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
        $product = new Product(); //$product is variable name.you can give any name.//this Product means "Product model" model name should be capital letter

        $product->Product_ID = $request->Product_ID; //very near task is situated in views\tasks.blade.php "<input type='text' name='tasks'>" // next task is situted in colum name in data base
        $product->Product_Name = $request->Product_Name;
        $product->Cost_of_Product = $request->Cost_of_Product;
        $product->Sales_Price = $request->Sales_Price;
        $product->Weight = $request->Weight;
        $product->Discount_rate = $request->Discount_rate;
        $product->Expire_Date = $request->Expire_Date;

        $product->save(); //Save model to the database
        if ($product) {
            return ["Result" => "Data has been saved"];
        } else {
            return ["Result" => "Operation failed"];
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Product_ID)
    {
        $product = Product::find($Product_ID);
        return response()->json($product);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //## $product=Product::find($id);
        //## return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$Product_ID)
    {
        $product = Product::find($Product_ID);
        $product->Product_Name = $request->input('Product_Name');
        $product->Cost_of_Product = $request->input('Cost_of_Product');
        $product->Sales_Price = $request->input('Sales_Price');
        $product->Weight = $request->input('Weight');
        $product->Discount_rate = $request->input('Discount_rate');
        $product->Expire_Date = $request->input('Expire_Date');
        
        $product->save();
        return response()->json( $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Product_ID)
    {
        $product = Product::find($Product_ID);
          
        $product->delete();
            return response()->json(['sucsess'=>'record has been delete']);
        
    }
}
