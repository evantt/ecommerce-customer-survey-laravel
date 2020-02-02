<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Shipment;
use App\Payment;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        // $products = Product::all();
        // $shipments = Shipment::all();
        // $payments = Payment::all();
        // return view('administrator.admin', compact('payments', 'shipments', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $shipments = Shipment::all();
        $payments = Payment::all();
        return view('respondent.survey', compact('products', 'shipments', 'payments'));
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
        $order->product_id = $request->product_id;
        $order->shipment_id = $request->shipment_id;
        $order->payment_id = $request->payment_id;
        $order->resp_id = auth()->user()->id;
        //dd($order);
        $order->save();
        return redirect('/Home')->with('status','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\surveys  $surveys
     * @return \Illuminate\Http\Response
     */
    public function show(surveys $surveys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\surveys  $surveys
     * @return \Illuminate\Http\Response
     */
    public function edit(surveys $surveys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\surveys  $surveys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, surveys $surveys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\surveys  $surveys
     * @return \Illuminate\Http\Response
     */
    public function destroy(surveys $surveys)
    {
        //
    }
}
