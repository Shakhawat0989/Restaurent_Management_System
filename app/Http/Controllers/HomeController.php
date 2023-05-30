<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Cheflist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $data=Food::all();

        $data2=Cheflist::all();

        return view("home",compact("data","data2"));
    }
     public function redirects(){

        $data=Food::all();
        $data2=Cheflist::all();

        $usertype = Auth::user()->user_type;

        if($usertype == '1'){
            return view('admin.adminhome');
        }
        else {
        return view('home',compact('data','data2'));
        }
    }
}
