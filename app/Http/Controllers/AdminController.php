<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Admin;
use App\Country;
use App\Order;
use App\Product;
use App\Shipment;
use App\Payment;
//use App\Role;

class AdminController extends Controller
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
        // $joins = DB::table('users')
        //         ->join('admins', 'admins.id', '=', 'users.survey_id')
        //         ->join('countries', 'countries.id', '=', 'users.country_id')
        //         ->select('users.*', 'admins.storename', 'countries.name')
        //         ->get();

        // $join = DB::table('orders')
        //         ->join('users', 'users.id', '=', 'orders.resp_id')
        //         ->join('products', 'products.id', '=', 'orders.product_id')
        //         ->join('shipments', 'shipments.id', '=', 'orders.shipment_id')
        //         ->join('payments', 'payments.id', '=', 'orders.payment_id')
        //         ->select('orders.*', 'users.first_name', 'products.category', 'shipments.service', 'payments.method')
        //         ->get();

        $orders = Order::all();
        $countries = Country::all();
        //$roles = Role::all();
        $surveys = Admin::all();
        $respondents = User::all();
        $products = Product::all();
        $shipments = Shipment::all();
        $payments = Payment::all();
        return view('administrator.admin', compact('respondents', 'surveys', 'countries', 'orders', 'products', 'shipments', 'payments' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::all();
        $countries = Country::all();
        //$roles = Role::all();
        $surveys = Admin::all();
        $respondents = User::all();
        $products = Product::all();
        $shipments = Shipment::all();
        $payments = Payment::all();
        return view('administrator.admin', compact('respondents', 'surveys', 'countries', 'orders', 'products', 'shipments', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = Product::all();
        $shipments = Shipment::all();
        $payments = Payment::all();
        $orders = Order::all();
        //$roles = Role::all();
        $countries = Country::all();
        $surveys = Admin::all();
        $respondents = User::all();
        User::create($request->all());
        Order::create($request->all());
        //return redirect('/Admin', compact('respondents', 'surveys', 'countries'))->with('status','Success');
        return redirect('/Admin')->with('status','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Order::all();
        $countries = Country::all();
        //$roles = Role::all();
        $surveys = Admin::all();
        $respondents = User::find($id);
        return view('administrator.edit',  compact('respondents', 'surveys', 'countries'));
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
        $respondents = User::find($id);

        $respondents->update([
            'survey_id'=>request('survey_id'),
            'role'=>request('role'),
            'first_name'=>request('first_name'),
            'last_name'=>request('last_name'),
            'phone_number'=>request('phone_number'),
            'email'=>request('email'),
            'gender'=>request('gender'),
            'birthdate'=>request('birthdate'),
            'address'=>request('address'),
            'country_id'=>request('country_id'),
            'zip_code'=>request('zip_code'),
            'occupation'=>request('occupation')
        ]);

        //dd($request);
        return redirect('/Admin')->with('status','Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        User::destroy($id);
        return redirect('/Admin')->with('status','Success');
    }
}
