<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    //to print
    public function index(){
        $data=[];
       // $data['students'] = DB::table('add-student')->where('name','tahrim')->orwhere('name','Al-amin')->orwhere('name','nazerin')->get();
      // $data['students']  = DB::table('add-student')->whereBetween('id',[2,4])->get();
      //---------------------------
    //   $data['students']  = DB::table('add-student')->where('name','afia')->orwhere(function($query){
    //       $query->where('name','anika')->where('id','<',6);
    //   })->get();

   $data['students']  = DB::table('add-student')->get();
        return view('student-list',$data);
    }


    public function add(){
        return view('add-student');
    }
    
    public function add1(){
        return view('edit-student');
    }
    public function store(Request $request){
        $data = array(
           'name'=>$request->name,
           'email'=>$request->email,
           'studentId'=>$request->studentId,
           'password'=>$request->password,
        );
      //  print_r($data);
       // exit();
      // $result = DB::table('add-student')->insert($data);
       //if we want to print 
       $result = DB::table('add-student')->insertGetId($data);
      // echo $result;
      // exit();
       return redirect()->route('student.add');
    }


    //update data

    public function edit($id){
        $student = DB::table('add-student')->where('id',$id)->first();
        return view('edit-student', compact('student'));
    }

    public function update(Request $request){
        $id = $request->id;
        // dd($request);
       
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'studentId'=>$request->studentId,
            'password'=>$request->password,
         );  
         
         $result = DB::table('add-student')->where('id',$id)->update($data);
         return redirect()->route('student.show');
        
    }


    //delete data

    public function delete($id){
          
         
         DB::table('add-student')->where('id',$id)->delete();
         return redirect()->route('student.show');
        
    }

}
