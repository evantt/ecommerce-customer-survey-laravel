<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        return view('home');
    }

    // public function Admin()
    // {
    //     return view('administrator.admin');
    // }

    public function Login()
    {
        return view('administrator.login');
    }

    // public function Identity()
    // {
    //     return view('respondent.identity');
    // }

    public function Register()
    {
        return view('administrator.register');
    }

    public function Survey()
    {
        return view('respondent.survey');
    }
}
