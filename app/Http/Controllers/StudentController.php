<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\studentclass;

class StudentController extends Controller
{
    //digunakan untuk menulis function
    //controller digunakan untuk menyambungkan model dg view
    //digunakan untuk menuliskan semua fungsi php

    public function index(){
        $student = studentclass::join("student", "student.id_class", "=", "studentclasses.id")->get();

        $data = [
            'student'=>$student
        ];

        return view('student.index', $data);
    }

    public function add(){
        $studclass = studentclass::all();

        $data = [
            'class'=>$studclass
        ];
        return view('student.add', $data);
    }

    public function save(Request $request){
        $student = new student();
        $student->nis = $request->nis;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->id_class = $request->class;
        $student->save();

        return redirect('student');

    }

    public function edit($id){
        $student = student::find($id); // find selalu menggunakan primary key

        $data = [
            'student' => $student
        ];

        return view('student.edit',$data);
    }

    public function update(Request $request,$id){
        $student = student::find($id);
        $student->nis = $request->nis;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->id_class = $request->class;
        $student->save();

        return redirect('student');

    }

    public function delete($id){
        $student = student::find($id);
        $student->delete();

        return back();
    }
}
