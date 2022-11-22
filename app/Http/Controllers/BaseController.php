<?php

namespace App\Http\Controllers;

use App\Models\Userinfo;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('wel');
    }
    public function about($name,$lname)
    {
        $fullName = $name . " " . $lname;
        $collage = "<h1> L.J.Collage </h1>";
         $student = ['chaggan','magan','rahulchakli'];
        return view('name',compact('fullName','collage','student'));
    }
    public function userInfo()
    {
         return view('userInfo');      
    }
    public function userInfoCreate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        Userinfo::create{[
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]};

         echo"On form Create";
         print_r($request->all());
         dd($request->all());
         echo"down"; 
    }
}
