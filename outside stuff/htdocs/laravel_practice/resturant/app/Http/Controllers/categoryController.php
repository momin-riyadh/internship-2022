<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categoryController extends Controller
{
    public function store(Request $req){
       $cat = new category;
       $data = array(
             
        'category'=>$req->category,
     );

      
      $count = category::where('category',$req->category)->count();

      if($count==0){
        $result = category::create($data);
      }
      else{
          $msg ="category already exists";
         print_r($msg);
         return view('add-category',compact('msg'));
      }
      return redirect()->route('category');
    }



    public function print(){
        
       $data = category::get();
      // print_r($data);
      return view('category-list', compact('data'));
  
    }

   

    
}
