<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Student\findOrFail;

class StudentController extends Controller
{
    public function index(){
        $students = Student::orderBy('id','DESC')->get();
        return view('crud', compact('students'));
    }

    public function store(Request $request){
        $request->validate([
            'name' =>'required',
            'roll' =>'required',
            'class' =>'required',

        ]);
        Student::insert([
            'name'=>$request->name,
            'roll'=>$request->roll,
            'class'=>$request->class,

        ]);
        return redirect()->back()->with('success','Successfully Data Added');


    }


    // edit
    public function edit($id) {
        $student=Student::findOrFail($id);
        return view('edit',compact('student'));

    }


    public function update(Request $request,$id) {
        Student::findOrFail($id)->update([
            'name' => $request->name,
            'roll'=>$request->roll,
            'class' => $request->class,
        ]);
        return redirect()->to('/crud')->with('success','Data Update Successfully ');

    }

    // delete

    public function delete($id) {
        Student::findOrFail($id)->delete();
        return redirect()->back()->with('delete','Successfully Data Deleted');
    }
    
  

}
