<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
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
        $order = new Order();

        $order->Order_Number = $request->Order_Number;
        $order->Quentity = $request->Quentity;
        $order->Date = $request->Date;
        $order->Bill_Value= $request->Bill_Value;
        $order->User_ID = $request->User_ID;
        $order->Shop_ID = $request->Shop_ID;
        $order->Vehicle_Number =$request->Vehicle_Number;

        $order->save(); //Save model to the database
        if ($order) {
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
    public function show($Order_Number)
    {
        $order = Order::find($Order_Number);
        return response()->json($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Order_Number)
    {
        $order = Order::find($Order_Number);
        $order->Order_Number = $request->input('Order_Number');
        $order->Quentity = $request->input('Quentity');
        $order->Date = $request->input('Date');
        $order->Bill_Value = $request->input('Bill_Value');
        $order->User_ID = $request->input('User_ID');
        $order->Shop_ID = $request->input('Shop_ID');
        $order->Vehicle_Number =$request->Vehicle_Number;

        
        $order->save();
        return response()->json( $order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Order_Number)
    {
        $order = Order::find($Order_Number);
          
        $order->delete();
            return response()->json(['sucsess'=>'record has been delete']);
        
    }
}
