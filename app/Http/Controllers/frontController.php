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
             //getting secondary about data
        $aboutUs = DB::table('contents')->where('category','services')->first();
            //getting secondary about data
        $aboutUs1 = DB::table('contents')->where('category','portfolio')->first();
           //getting all services
        $services = DB::table('services')->where('status','on')->get();
           //getting about slug
        $services->slug = DB::table('categories')->where('title','services')->value('slug');
           //getting all portfolios
        $portfolio = DB::table('portfolios')->where('status','on')->get();
         foreach($portfolio as $port){
            $port->class = DB::table('portcats')->where('title', $port->category)->value('slug');
         }
           //getting portfolio slug
        $portfolio->slug = DB::table('categories')->where('title','portfolio')->value('slug');
           //getting portfolio categories
        $portcats = DB::table('portcats')->where('status','on')->get();
         //getting clients from db
        $clients = DB::table('clients')->where('status','on')->get();
            //getting clients slug
        $clients->slug = DB::table('categories')->where('title','clients')->value('slug');
          //getting clients from db
        $teams = DB::table('teams')->where('status','on')->get();
        //getting clients slug
        $teams->slug = DB::table('categories')->where('title','teams')->value('slug');

         
         
//returning view elements
        return view('index',[
    'setups'=> $setups,
    'cats' => $cats,
    'home' => $home,
    'aboutus' => $aboutus,
    'services' => $services,
    'portfolio' => $portfolio,
    'portcats' => $portcats,
    'clients' => $clients,
    'teams' => $teams,
    'aboutUs' => $aboutUs,
    'aboutUs1' => $aboutUs1
 ]);
   
    }
}
