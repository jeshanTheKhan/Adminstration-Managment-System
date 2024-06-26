<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Http\Request;

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
}
