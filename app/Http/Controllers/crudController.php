<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class crudController extends Controller
{
    //function to insert data into tbl
    public function insertData()
    { //requesting excluding token
        $data = Request::except('_token');
        //decrypting data from table n assigning it to tbl variable
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        //checking if the data variable is not empty
        if (!empty($data['image'])) {
            //checking if the data variable has an image 
            if (Request::hasFile('image')) {
                //uploading the img 
                $data['image'] = $this->upload($data['image'], $tbl);
            }
        }

        //if clsoe to check if input has title and create slug based on data
        if(Request::has('title')){
             $data['slug'] = $this->slug($data['title']);
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table($tbl)->insert($data);
        //flashing msg from the session
        Session::flash('message', 'Data Inserted Successfully.');
        //redirecting user to the index page
        return redirect()->back();
    }

//function that will handle category slug
public function slug($string){
    //convert the string to lower case and trim spaces
    $string = strtolower(trim($string));
//replace the strg where their are spaces
    $string = preg_replace('/\s+/', '-',$string);
    //replace even numbers
    $string = preg_replace('/[^a-z0-9-]/','-',$string);
    //controll if there are multiple hyphens from the strg
    $string = preg_replace('/-+/', '-', $string);
    //ruturn the strg if it has hyphen at the end
    return rtrim($string, '-');
}

//function to update data 
public function updateData()
{ //requesting excluding token
    $data = Request::except('_token');
    //decrypting data from table n assigning it to tbl variable
    $tbl = decrypt($data['tbl']);
    unset($data['tbl']);
    //checking if the data variable is not empty
    if (!empty($data['image'])) {
        //checking if the data variable has an image 
        if (Request::hasFile('image')) {
            //uploading the img 
            $data['image'] = $this->upload($data['image'], $tbl);
        }
    }

    //if close to check if input has title and create slug based on data
    if(Request::has('title')){
         $data['slug'] = $this->slug($data['title']);
    }

    $data['created_at'] = date('Y-m-d H:i:s');
    DB::table($tbl)->where(key($data),reset($data))->update($data);
    //flashing msg from the session
    Session::flash('message', 'Data Updated Successfully.');
    //redirecting user to the update categories page
    return redirect()->back();
}



//function for image upload
    private function upload($image, $tbl)
    {
        //getting image name
        $name = $image->getClientOriginalName();
        //renaming image
        $newName = date('ymdgis') . $name;
        //path defination and uploading to folder uploads/table-name
        $image->move(public_path() . '/' . 'uploads/' . $tbl, $newName);
        //returning the new image name
        return $newName;
    }

    /////////////CRUD controller ends here/////////////////////////////
}
