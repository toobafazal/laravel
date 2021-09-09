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
        $stu-> stuName = $r->stuNAme;
        $stu-> stuClass = $r->stuClass;

        $stu->save();
        return redirect('students');

    }
}
