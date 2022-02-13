<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function __construct()
    {
    }
    //function to return home view
    public function index()
    {       //variable to get setups
            $setups = DB::table('setups')->first();
            //variable to get categories
            $cats = DB::table('categories')->where('status','on')->get();
            //variable to get all home data
            $home = DB::table('contents')->where('category','home')->first();
            //getting all about details
           $aboutus = DB::table('contents')->where('category','aboutus')->first();
              //variable to get posts
              $post = DB::table('contents')->first();
//returning views
        return view('index',[
    'setups'=> $setups,
    'cats' => $cats,
    'home' => $home,
  'aboutus' => $aboutus,
  'post' => $post
 ]);
   
    }
}
