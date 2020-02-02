<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Admin;
use App\Country;

class RespController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $countries = Country::all();
    //     $surveys = Admin::all();
    //     $respondents = User::all();
    //     return view('auth.login', compact('respondents', 'surveys', 'countries'));
    // }
    public function construct()
    {
        $this->middleware('guest');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $surveys = Admin::all();
        $respondents = User::all();
        return view('auth.register', compact('countries', 'surveys', 'respondents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->country_id = $request->country_id;
        $user->survey_id = $request->survey_id;
        $user->zip_code = $request->zip_code;
        $user->password = bcrypt($request->password);
        //$user->role_id = DB::table('roles')->select('id')->where('name', 'Resp')->first()->id;
        $user->role = 'Resp';
        //dd($user);
        $user->save();
        return redirect('/Login')->with('status','Success');
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
