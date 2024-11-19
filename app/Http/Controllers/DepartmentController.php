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
        $store->duration=$req->time;
        $store->m_fee=$req->monthly_fee;
        $store->semester_fee=$req->s_fee;
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

    public function edit($id){
        $data=Department::find($id);
        return view("department.edit",compact('data'));
    }
    // Update
    public function update(Request $req){
        
        $store= Department::find($req->c_id);
        $store->dep_name=$req->name;
        $store->dephead_name=$req->head_name;
        $store->email=$req->email;
        $store->phone=$req->phone;
        $store->duration=$req->time;
        $store->m_fee=$req->monthly_fee;
        $store->semester_fee=$req->s_fee;
        $store->save();
        if($store){
            $notification = array(
                'message' => 'Department Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.department')->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Failed To Update!!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        
    }
     // Delete
     public function del($id){
        $data=Department::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Coruse Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
