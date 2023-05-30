<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Cheflist;
use App\Models\Reservation;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function user()
    {
        $data=User::all();
        return view('admin.users',compact('data'));
    }
     public function deleteuser($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function addfood()
    {
        $data=Food::all();
        return view('admin.addfood',compact('data'));
    }

    public function deletemenu($id)
    {
       $data=Food::find($id);
       $data->delete();

       return redirect()->back();
    }

     public function upload(Request $request)
    {
        $data=new Food;

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
         $request->image->move('foodimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();

        return redirect()->back();

    }

    public function updateview($id)
    {
        $data=Food::find($id);
        return view('admin.updateview',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Food::find($id);
        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
         $request->image->move('foodimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();

        return redirect()->back();

    }

    public function reservation(Request $request)
    {
        $data = new Reservation();

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();

        return redirect()->back();

    }

    public function viewreservation()
    {
        $data = Reservation::all();

        return view('admin.viewreservation',compact('data'));
    }

    public function viewchef()

    {
        $data=Cheflist::all();
        return view('admin.viewchef',compact('data'));
    }


    public function chef(Request $request)
    {
        $data = new Cheflist;

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();
         $request->image->move('chefimage',$imagename);

         $data->image = $imagename;

         $data->name = $request->name;
         $data->speciality = $request->speciality;

         $data->save();

         return redirect()->back();
    }

    public function updatechef($id)
    {
        $data=Cheflist::find($id);

        return view('admin.updatechef',compact('data'));
    }

      public function uploadchef(Request $request,$id)
    {
        $data=Cheflist::find($id);

        $image=$request->image;

        if($image)
        {
            $imagename =time().'.'.$image->getClientOriginalExtension();
         $request->image->move('chefimage',$imagename);

        $data->image=$imagename;
        }

        $data->name=$request->name;
        $data->speciality=$request->speciality;


        $data->save();

        return redirect()->back();
    }

    public function deletechef($id)
    {
        $data=Cheflist::find($id);
        $data->delete();

        return redirect()->back();
    }


}
