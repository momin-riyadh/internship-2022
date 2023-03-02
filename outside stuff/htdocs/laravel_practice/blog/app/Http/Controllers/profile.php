<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\teacher;

use App\Repositories\Interfaces\userRepositoryInterface;

class profile extends Controller
{
    private $userRepository;
    public function __construct(userRepositoryInterface $userRepository){
          $this->userRepository = $userRepository;
    }
    function form(){
        return view('userview');
    }

    function save(Request $req){
       
       // print_r($req->input());

        // $user = new teacher;
        // $user->name = $req->name;
        // $user->email = $req->email;
        // $user->address = $req->address;
        // $user->password = $req->password;
        // $user->save(); 

        $data = array(
             
            'name'=>$req->name,
            
            'email'=>$req->email,
            'address'=>$req->address,
            'password'=>$req->password,
         );
        
        $this->userRepository->store($data);

        //------------inserting using array
        // $data = new teacher;
        // $data = array(
        //     'name'=>$req->name,
            
        //     'email'=>$req->email,
        //     'address'=>$req->address,
        //     'password'=>$req->password,
        //  );

        //  $result = teacher::insertGetId($data);
         //-----finish using array
        return redirect()->route('profile.list');
    
    }
    
  
    function edit($id){
        $data= $this->userRepository->find($id);
        return view('edit-mUser',compact('data'));
    }

    function update(Request $req,$id){
       // $id = $req->id;
         $data = array(
             
            'name'=>$req->name,
            
            'email'=>$req->email,
            'address'=>$req->address,
            'password'=>$req->password,
         );

         $this->userRepository->update($data,$id);
         return redirect()->route('profile.list');
    }

    function delete($id){
        $this->userRepository->delete($id);
        return redirect()->route('profile.list');
    }

    function index(){
      $data = $this->userRepository->all();
      return view('mUser-list', compact('data'));
    }
}
