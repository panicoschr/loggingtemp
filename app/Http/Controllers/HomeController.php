<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       //return view('home');
   //    return view('home', ['origin'=>'index']);
        
        
        return redirect()->route('auth');
        
    }
    
        public function auth()
    {
       //['origins'=>'auth']
       return view('auth');

        
    }
    
        public function nonauth()
    {
            
              Auth::logout();
       return view('nonauth');
      
        
    }
}
