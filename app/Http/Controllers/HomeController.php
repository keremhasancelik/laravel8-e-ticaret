<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){

        return view('home/index');
    }

    public  function  login(){
        return view('admin/login');
    }

    public function logincheck(Request $request){

       // $method = $request ->method();

        if ($request -> isMethod('post')){

            $credentails = $request ->only('email','password');
            if (Auth::attempt(@$credentails)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors(['email'=>'The provided credentails do not match our records',]);
        }
        else
        {
            return view('admin/login');
        }

    }

    public  function  logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
