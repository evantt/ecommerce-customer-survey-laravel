<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respondent;
use App\Survey;
use App\Country;

class RespondentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $survey_id = auth()->survey()->id;
        // $survey = User::find($survey_id);
        $countries = Country::all();
        $surveys = Survey::all();
        $respondents = Respondent::all();
        return view('administrator.admin', compact('respondents', 'surveys', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('respondent.identity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countries = Country::all();
        $surveys = Survey::all();
        $respondents = Respondent::all();
        Respondent::create($request->all());
        return redirect('/Admin', compact('respondents', 'surveys', 'countries'))->with('status','Success');
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
        $countries = Country::all();
        $surveys = Survey::all();
        //$respondents = Respondent::all();
        $respondents = Respondent::find($id);
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
        // $respondents = Respondent::find($id);
        // $respondents->survey_id = $request->survey_id;
        // $respondents->first_name = $request->first_name;
        // $respondents->last_name = $request->last_name;
        // $respondents->phone_number = $request->phone_number;
        // $respondents->email = $request->email;
        // $respondents->gender = $request->gender;
        // $respondents->birthdate = $request->birthdate;
        // $respondents->address = $request->address;
        // $respondents->country_id = $request->country_id;
        // $respondents->zip_code = $request->zip_code;
        // $respondents->occupation = $request->occupation;
        // $respondents->save();
        $respondents = Respondent::find($id);

        $respondents->update([
            'survey_id'=>request('survey_id'),
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
        Respondent::destroy($id);
        return redirect('/Admin')->with('status','Success');
    }
}
