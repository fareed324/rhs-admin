<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_doctor;
use Illuminate\Support\Facades\View;
class addDoctorController extends Controller
{

    public function detail(){
        $data =add_doctor::get();

     return view('layouts.add_doctor',["record"=>$data]);
    }
    // public function sidedetail(){
    //     $user =add_doctor::get();

    //  return view('layouts.sidenav',["rec"=>$user]);
    // }
    public function create(Request $request){
        $insert=add_doctor::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'desc'=>$request->desc,
        ]);
        return redirect('add_doctor')->with('message','Successfully inserted');
    }

    public function edit(Request $request,$id)
    {
        $insert=add_doctor::updateOrCreate(['id'=>$id],[
            'name'=>$request->name,
            'age'=>$request->age,
            'desc'=>$request->desc,
        ]);
        return redirect('add_doctor')->with('message','Successfully update');
    }

    public function delete(Request $request,$id)
    {
        $delete=add_doctor::destroy($id);

        return redirect('add_doctor');
    }
}
