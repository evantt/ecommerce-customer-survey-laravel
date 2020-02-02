<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\User;

class LoginController extends Controller
{

    public function construct()
    {
        $this->middleware('guest');
    }

    public function getlogin()
    {
        return view('auth.login');
    }

    public function postlogin(Request $req)
    {
        // if($this->login($req)){
        //     $user = Auth::User();
        //     $admin = Auth::Admin();
        //     if($user->role === 'Resp'){
        //         return redirect()->route('respondent.survey');
        //     }elseif ($admin->role === 'admin'){
        //         return redirect()->route('administrator.admin');
        //     }else{
        //         return redirect()->route('home');
        //     }
        // }        

        if(Auth::attempt($req->only('email', 'password'))){
            return redirect('/Survey/create');
        }
        return redirect('/Login');
        
        
        // if(Auth::attempt([
        //     'email' => $req->email,
        //     'password' => $req->password
        // ]))
        // {
        //     return redirect('/Survey/create'); 
        // }elseif(Auth::Admin()::attempt([
        //     'username' => $req->username,
        //     'password' => $req->password
        // ]))
        // {
        //     return redirect('/Admin'); 
        
        // }else{
        //     return 'salah';
        // }
        // $data1 = Admin::where('username', $req->username)->where('password', $req->password)->get();
        // $data2 = User::where('email', $req->email)->where('password', $req->password)->get();
        // dd($data2);
        // if(count($data1)>0){
        //     Auth::guard('Admin')->LoginUsingId($data1[0]['id']);
        //     return redirect('/Admin');
        // }elseif (count($data2)>0){
        //     Auth::guard('User')->LoginUsingId($data2[0]['id']);
        //     return redirect('/Survey/create');
        // }else{
        //     return 'login gagal';
        // }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
