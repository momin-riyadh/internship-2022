<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class adminController extends Controller
{
    public function login(Request $req){
        $data = new admin;
        $data = array(
               
            'email'=>$req->email,
        
            'password'=>$req->password,
         );
        
       

        $count = admin::where('email',$req->email)->where('password',$req->password)->count();

      

        if($count==1){
            $req->session()->put('adminData',$data);
            
            return redirect()->route('admin.profile');
        }
        else{
            echo "invalid username or password";
        }
        

        
       
    }



    
    public function logout(){
        session()->forget('adminData');
        
        session()->flush('adminData');
        

        return redirect()->route('welcome');
    }

   
}
