<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Http\Request;
use Str;

class CourseController extends Controller
{
    //
    public function index(){
        $dep=Department::all();
        return view('course.index',compact('dep'));
    }

    public function add(Request $req){
        $store= new Course();
        $store->c_name=$req->name;
        $store->slug=Str::slug($req->name);
        $store->dep	=$req->dep;
        
        $store->save();
        if($store){
            $notification = array(
                'message' => 'Course Added Successfully',
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
        $course=Course::all();
        return view('course.table',compact('course'));
    }
    // Edit
    public function edit($id){
        $data=Course::find($id);
        $dep=Department::all();
        return view('course.edit',compact('data','dep'));
    }

     // Update
     public function update(Request $req){
        
        $store= Course::find($req->c_id);
         $store->c_name=$req->name;
        $store->slug=Str::slug($req->name);
        $store->dep	=$req->dep;
        $store->save();
        if($store){
            $notification = array(
                'message' => 'Course Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.course')->with($notification);
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
        $data=Course::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Coruse Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
