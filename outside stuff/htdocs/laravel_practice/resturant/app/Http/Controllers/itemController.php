<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\food;
use App\category;

class itemController extends Controller
{
  public function store(Request $req)
  {
    $cat = new food;
    // $image = $req->file('image')->store('public\food-image');

    if ($req->hasfile('image')) {
      $file = $req->file('image');
      $extenstion = $file->getClientOriginalExtension();
      $filename = time() . '.' . $extenstion;
      $file->move('food-image/', $filename);
      $req->image = $filename;
    }

    $data = array(

      'category' => $req->category,
      'food' => $req->food,
      'image' => $req->image,
      'price' => $req->price,
    );


    $count = food::where('food', $req->food)->count();

    if ($count == 0) {
      $result = food::create($data);
    } else {
      $msg = "category already exists";
      print_r($msg);
      return view('add-food', compact('msg'));
    }
    return redirect()->route('test');
  }



  public function print()
  {

    $data = food::get();
    // print_r($data);
    return view('foodList', compact('data'));
  }


  public function delete($id)
  {
    $del = food::where('id', $id)->delete();
    return redirect()->route('food.view');
  }


  public function showSelect()
  {

    $cat = category::get();
    // print_r($cat);
    return view('add-food', compact('cat'));
  }

  public function menu()
  {

    $f = food::get();
    // dd($f);
    // print_r($f);
    return view('welcome', compact('f'));
  }
}
