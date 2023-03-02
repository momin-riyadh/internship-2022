<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

use App\Repositories\Interfaces\userRepositoryInterface;

class userController extends Controller
{
    private $user;
    public function __construct(userRepositoryInterface $user){
     $this->userRepository = $user;
    }

    public function store(Request $req){
        $data = new user;
        $data = array(
             
            'name'=>$req->name,
            
            'email'=>$req->email,
        
            'password'=>$req->password,
         );
        
         $count = user::where('email',$req->email)->where('password',$req->password)->count();
         if($count==1){
          
            return redirect()->route('user.register');
         }
         $this->userRepository->store($data);

       
        return redirect()->route('user.login');
        
        
        
        
    }


    public function login(Request $req){
        $data = new user;
        $data = array(
               
            'email'=>$req->email,
        
            'password'=>$req->password,
         );
        
       

        $count = user::where('email',$req->email)->where('password',$req->password)->count();

        

        if($count==1){
            $req->session()->put('data',$data);
           // return $req->session()->get('data');
            return redirect()->route('user.profile');
        }
        else{
            echo "no";
        }

        
       
    }


    public function logout(){
        session()->forget('data');
        
        session()->flush('data');
        

        return redirect()->route('welcome');
    }
}
