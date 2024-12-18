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
            $image_ext = chr(rand(65, 90)) .'-'.rand(00000, 99999). '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/teacher/' . $image_ext);
            $store->image= $image_ext;
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

    public function table(){
        $teacher=Teacher::all();
        return view('teacher.table',compact('teacher'));
    }
    // Edit
    public function edit($id){
        $data=Teacher::find($id);
        $dep=Department::all();
        return view('teacher.edit',compact('dep','data'));

    }
    // Update
    public function update(Request $req){
        
        $store= Teacher::find($req->c_id);
        $store->teacher_name=$req->name;
        $store->department=$req->department;
        $store->email=$req->email;
        $store->phone=$req->phone;
        if ($req->file('image')) {
            $image = $req->file('image');
            $image_ext = chr(rand(65, 90)) .'-'.rand(00000, 99999). '.' . $image->getClientOriginalExtension();
         
             // Resize and save the image
             Image::make($image)->resize(300, 300)->save('storage/back/media/teacher/' . $image_ext);
         
             // Delete the old image if it exists
             if ($store->images && file_exists('storage/back/media/teacher/' . $store->images)) {
                 unlink('storage/back/media/teacher/' . $req->old_img);
             }
         
             // Update the database record with the new image name
             $store->image= $image_ext;
             $store->save();
         }
         $store->save();
        if($store){
            $notification = array(
                'message' => 'Department Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.teacher')->with($notification);
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
        $result = Teacher::find($id);
        
        // Check if the image file exists and delete it
        if ($result && $result->images) {
            $imagePath = 'storage/back/media/teacher/' . $result->images;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        // Delete the database entry
        $result->delete();
        
        $notification = array(
            'message' => 'Teacher Deleted Successfully',
            'alert-type' => 'error'
        );
        
        return redirect()->back()->with($notification);
    }
}

/*

*/