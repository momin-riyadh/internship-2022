<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teacherController extends Controller
{
    public function addTeacher(){
     return view('add-teacher');
    }

    public function store(Request $request){
        $data = array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            
            'password'=>$request->password,
         );

         $result = DB::table('add-teacher')->insertGetId($data);
         return redirect()->route('teacher.add');
    }


    public function index(){
        $data =[];
        $data['teachers']=DB::table('add-teacher')->get();
        return view('teacher-list', $data);
    }

    public function edit($id){
        $teacher = DB::table('add-teacher')->where('id',$id)->first();
        return view('edit-teacher', compact('teacher'));

    }
    
    public function update(Request $request){
        $id = $request->id;
        $data = array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email, 
            'password'=>$request->password,
         );

         $result = DB::table('add-teacher')->where('id',$id)->update($data);
         return redirect()->route('teacher.show');
    }
}
