<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function __construct()
    {
    }
    //function to return admin view
    public function index()
    {
        return view('backend.index');
    }
    //function to return insert data view
    public function setups()
    {
        //get data from the db table 
        $data = DB::table('setups')->first();
        return view('backend.insert.setup', ['data' => $data]);
    }

/////////CATEGORIES///////////////////////
    
    //function that returns the category view
    public function categories(){
        //get all categories
         $data = DB::table('categories')->get();
        return view ('backend.insert.category',['data'=> $data]);
    }
    //function to delete category
    public function deleteCategory($id){
         // delete category
        $data = DB::table('categories')->where('cid',$id)->delete();
         //redirect user back with success msg 
        return redirect()->back()->with('message','Data Deleted successfully.');
    }
    //function to edit category
    public function editCategory($id){
        // edit category
        $data = DB::table('categories')->get();
       $maindata = DB::table('categories')->where('cid',$id)->first();
       if($maindata){
        return view('backend.edit.category',['data' =>$data, 'maindata'=>$maindata]);
       }else{
           return redirect('categories');
       }
        //redirect user back with success data 
     
   }

//////////////////////POSTS home and about us sections///////////////////////

   //function to create a new post ie home and about us sections
public function newPost(){
    $cats = DB::table('categories')->where('status','on')->get();
    return view('backend.insert.newpost', ['cats'=>$cats]);
}
//function to retrieve all posts from the db ie home and about us sections
public function allPosts(){
    $data = DB::table('contents')->get();
    return view('backend.display.posts',['data'=>$data]);

}
//function to edit posts ie home and about us sections
public function editPost($id){
    $cats = DB::table('categories')->where('status','on')->get();

    $data = DB::table('contents')->where('conid',$id)->first();
    return view('backend.edit.editpost',['data'=>$data, 'cats'=>$cats]);
}
  //function to delete post
  public function deletePost($id){
    // delete post
   $data = DB::table('contents')->where('conid',$id)->delete();
    //redirect user back with success msg 
   return redirect()->back()->with('message','Data Deleted successfully.');

}

/////////SERVICES////////////////////////

//function to retrieve all posts from the db
public function allServices(){
    $data = DB::table('services')->get();
    return view('backend.display.allservices',['data'=>$data]);

}
   //function to create a new post 
   public function newService(){
    return view('backend.insert.service');
}


//////////////////PORTFOLIO AND CATEGORIES//////////////

 //function that gets data from portfolio categories table->portcats and returns the category view
 public function portcats(){
    //get all categories
     $data = DB::table('portcats')->get();
    return view ('backend.insert.portfolio-category',['data'=> $data]);
}
  //function to create a new portfolio 
  public function newPortfolio(){
      $cats = DB::table('portcats')->where('status','on')->get();
    return view('backend.insert.portfolio', ['cats'=>$cats]);
}
//function to retrieve all portfolios from the db
public function allPortfolios(){
    $data = DB::table('portfolios')->get();
    return view('backend.display.all-portfolio',['data'=>$data]);

}
//function to delete portfolio
public function deletePortfolio($id){
    // delete pportfolio
   $data = DB::table('portfolios')->where('pid',$id)->delete();
    //redirect user back with success msg 
   return redirect()->back()->with('message','Data Deleted successfully.');

}

/////////////////////CLIENTS SECTION///////////

 //function to create a new client 
 public function clients(){
    $data = DB::table('clients')->get();
  return view('backend.insert.clients', ['data'=>$data]);
}
//function to delete client
public function deleteClient($id){
    // delete post
   $data = DB::table('clients')->where('clid',$id)->delete();
    //redirect user back with success msg 
   return redirect()->back()->with('message','Data Deleted successfully.');

}
 //function to edit client
 public function editClient($id){
    // edit client
    $data = DB::table('clients')->get();
   $mainData = DB::table('clients')->where('clid',$id)->first();
   if($mainData){
    return view('backend.edit.client',['data' =>$data, 'mainData'=>$mainData]);
   }else{
       return redirect('clients');
   }
 
}
//function to delete service
public function deleteService($id){
    // delete service
   $data = DB::table('services')->where('sid',$id)->delete();
    //redirect user back with success msg 
   return redirect()->back()->with('message','Data Deleted successfully.');

}
//
/////////////ADMIN controller ends here/////////////////////////////
}
