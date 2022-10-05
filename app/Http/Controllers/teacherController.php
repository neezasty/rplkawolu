<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class teacherController extends Controller
{
    public function index(){
        return view('teacher.index');
    }

    public function get_data_teacher(){
        $teacher = teacher::all();

        return response()->json(
            [
                'teacher'=>$teacher,
            ],
            200
        );
    }

    public function detail($id){
        $teacher = teacher::find($id); // find selalu menggunakan primary key

        return response()->json(
            [
                'teacher'=>$teacher,
            ],
            200
        );
    }

    public function store(Request $request){
        $teacher = new teacher();
        $teacher->name = $request->name;
        $teacher->gender = $request->gender;
        $teacher->address = $request->address;
        $teacher->nohp = $request->nohp;
        $teacher->save();

        return response()->json(
            [
                'Message' => "Save Data Success...."
            ],
            200
        );

    }

    public function update(Request $request){
        $teacher = teacher::find($request->id);
        $teacher->name = $request->name;
        $teacher->gender = $request->gender;
        $teacher->address = $request->address;
        $teacher->nohp = $request->nohp;
        $teacher->save();
        return response()->json(
            [
                'Message'   => "Update Data Success..."
            ],
            200
        );
    }

    public function destroy($id){
        $teacher = teacher::find($id);
        $teacher->delete();

        return response()->json(
            [
                'Message'   => "Has been delete!"
            ],
            200
        );
    }

}
