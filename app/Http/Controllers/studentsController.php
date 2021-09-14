<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentsController extends Controller
{
    public function view(){
        $data = student::all();
        return view('students.view', ['data'=>$data]);
    }
    public function delete($id){
        $data = student::find($id);
        $data->delete();
        return redirect('students');
    }
    public function add(Request $r){
        $stu = new student;
        $stu->stuName=$r->stuName;
        $stu->stuClass=$r->stuClass;

        $stu->save();
        return redirect('students');

    }
    public function update($id){
        $data = student::find($id);
        return view('students.update',['data'=>$data]);
    }
    public function change(Request $r){
        $stu = student::find($r->id);
        $stu->stuName=$r->stuName;
        $stu->stuClass=$r->stuClass;

        $stu->save();
        return redirect('students');

    }
}
