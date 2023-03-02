<?php
namespace App\Repositories;
use App\Repositories\Interfaces\userRepositoryInterface;
use App\teacher;

class userRepository implements userRepositoryInterface{
 public function all(){
     return teacher::get();
 }

 public function store($data){
     teacher::create($data);
 }

 public function find($id){
    return teacher::where('id',$id)->first();
 }

 public function update($data,$id){
    teacher::where('id',$id)->update($data);
 }

 public function delete($id){
     return teacher::where('id',$id)->delete();
 }
}
?>