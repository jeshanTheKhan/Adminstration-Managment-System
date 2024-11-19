<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;
use Image;

class StudentController extends Controller
{
    //
    public function index(){
        $dep=Department::all();
        return view("student.index",compact('dep'));
    }

    // Insert Data
    public function add(Request $req){
        
        $store= new Student();
        $store->name=$req->s_name;
        $store->f_name=$req->f_name;
        $store->m_name=$req->m_name;
        $store->dob=$req->dob;
        $store->address=$req->address;
        $store->email=$req->email;
        $store->number=$req->number;
        $store->g_name=$req->g_name;
        $store->g_number=$req->g_number;
        $store->g_rel=$req->g_relation;
        $store->dep=$req->department;
        $store->s_id=$req->s_id;
        $store->s_batch=$req->batch;
        $store->s_section=$req->section;
       

        if ($req->file('image')) {
            $image = $req->file('image');
            $image_ext = chr(rand(65, 90)) .'-'.rand(00000, 99999). '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/student/' . $image_ext);
            $store->image = $image_ext;
        }
        $store->save();
        if($store){
            $notification = array(
                'message' => 'Student Added Successfully',
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
        $data=Student::all();
        return view('student.table',compact('data'));

    }

    public function view($id){
        $data=Student::find($id);
        return view('student.view',compact('data'));
    }
    // Edit
    public function edit($id){
        $data=Student::find($id);
        $dep=Department::all();
        return view('student.edit',compact('data','dep'));
    }
    // Update
    public function update(Request $req){
        
        $store= Student::find($req->c_id);
        $store->name=$req->s_name;
        $store->f_name=$req->f_name;
        $store->m_name=$req->m_name;
        $store->dob=$req->dob;
        $store->address=$req->address;
        $store->email=$req->email;
        $store->number=$req->number;
        $store->g_name=$req->g_name;
        $store->g_number=$req->g_number;
        $store->g_rel=$req->g_relation;
        $store->dep=$req->department;
        $store->s_id=$req->s_id;
        $store->s_batch=$req->batch;
        $store->s_section=$req->section;
        if ($req->file('image')) {
            $image = $req->file('image');
            $image_ext = chr(rand(65, 90)) .'-'.rand(00000, 99999). '.' . $image->getClientOriginalExtension();
         
             // Resize and save the image
             Image::make($image)->resize(300, 300)->save('storage/back/media/student/' . $image_ext);
         
             // Delete the old image if it exists
             if ($store->images && file_exists('storage/back/media/student/' . $store->images)) {
                 unlink('storage/back/media/student/' . $req->old_img);
             }
         
             // Update the database record with the new image name
             $store->image= $image_ext;
             $store->save();
         }
         $store->save();
        if($store){
            $notification = array(
                'message' => 'Student Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.student')->with($notification);
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
        $result = Student::find($id);
        
        // Check if the image file exists and delete it
        if ($result && $result->images) {
            $imagePath = 'storage/back/media/student/' . $result->images;
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
