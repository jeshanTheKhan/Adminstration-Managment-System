<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;
use Image;
class TeacherController extends Controller
{
    //
    public function index(){
        $dep=Department::all();
        return view('teacher.index',compact('dep'));
    }

    public function add(Request $req){
        $store= new Teacher();
        $store->teacher_name=$req->name;
        $store->department=$req->department;
        $store->email=$req->email;
        $store->phone=$req->phone;
        if ($req->file('image')) {
            $image = $req->file('image');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/teacher/' . $image_ext);
            $store->image = $image_ext;
        }
        $store->save();
        if($store){
            $notification = array(
                'message' => 'Teacher Information Added Successfully',
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
}

/*

*/