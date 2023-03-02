<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class StudInsertController extends Controller
{
    //
    public function insert(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
        $email = $request->input('email');
        $data = array('first_name'=>$first_name,
                      'last_name'=>$last_name,
                      'city_name'=>$city_name,
                      'email'=>$email);
        DB::table('student_details')->insert($data);
        echo "Record inserted successfully!<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
