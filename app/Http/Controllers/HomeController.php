<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    function setpassword(){

        //   echo 'MMM';exit;
        if(User::where('email',$_GET['email'])->exists()){
          return view('success',['successMsg'=>'Sorry!','from'=>'password']);
         }
         
         $error = '';
  
        return view('setpassword',compact('error'));
        
          
        //   return view('success',['successMsg'=>'Sorry!','from'=>'password']);
          
      }
    
}
