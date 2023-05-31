<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Content;

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
        $contents = Content::all();
        return view('home',compact('contents'));
        
    }

    public function index1()
    {
        $this->middleware('auth');
        $contents = Content::all();
        return view('home1',compact('contents'));
        
    }

    function setpassword(){

        //   echo 'MMM';exit;
        if(User::where('email',$_GET['email'])->exists()){
          return view('success',['successMsg'=>'Sorry! Your session is expired!','from'=>'password']);
         }
         
         $error = '';
  
        return view('setpassword',compact('error'));
        
          
        //   return view('success',['successMsg'=>'Sorry!','from'=>'password']);
          
      }
    
      public function content(){
            return view('content');
      }

      public function about(){
        return view('about');
  }

  public function service(){
    return view('service');
}

public function homePage(){
  //  echo 'KKKKK';exit;

    $contents = Content::get();
    return view('homePage',['contents'=> $contents]);
}
}
