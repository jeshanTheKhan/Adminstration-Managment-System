<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function index(){
        return view('department.index');
    }

    public function add(Request $req){
        $store= new Department();
        $store->dep_name=$req->name;
        $store->dephead_name=$req->head_name;
        $store->email=$req->email;
        $store->phone=$req->phone;
        $store->save();
        if($store){
            $notification = array(
                'message' => 'Department Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function table(){
        $data=Department::all();
        return view('department.table',compact('data'));
    }
}
