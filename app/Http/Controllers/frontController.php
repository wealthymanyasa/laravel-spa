<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function __construct()
    {
    }
    //function to return views
    public function index()
    {       //variable to get setups
        $setups = DB::table('setups')->first();
            //variable to get categories
        $cats = DB::table('categories')->where('status','on')->get();
            //variable to get all home data
        $home = DB::table('contents')->where('category','home')->first();
            //getting all about details
        $aboutus = DB::table('contents')->where('category','aboutus')->first();
           //getting about slug
        $aboutus->slug = DB::table('categories')->where('title','about us')->value('slug');
           //getting all services
        $services = DB::table('services')->where('status','on')->get();
           //getting about slug
        $services->slug = DB::table('categories')->where('title','services')->value('slug');
           //getting all portfolio
        $portfolio = DB::table('portfolios')->where('status','on')->get();
           //getting portfolio slug
        $portfolio->slug = DB::table('categories')->where('title','portfolio')->value('slug');
             
//returning views
        return view('index',[
    'setups'=> $setups,
    'cats' => $cats,
    'home' => $home,
    'aboutus' => $aboutus,
    'services' => $services,
    'portfolio' => $portfolio
 ]);
   
    }
}
