<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentclass;


class studentClassController extends Controller
{
    public function index(){
        $studclass = studentclass::all();

        $data = [
            'studentclass' =>$studclass
        ];

        return view('studentclass.index',$data);
    }

    public function add(){
        return view('studentclass.add');
    }

    public function save(Request $request){
        $studclass = new studentclass();
        $studclass->classname = $request->classname;
        $studclass->school_year = $request->school_year;
        $studclass->level = $request->level;
        $studclass->save();

        return redirect('studentclass');
    }

    public function edit($id){
        $studclass = studentclass::find($id); // find selalu menggunakan primary key

        $data = [
            'studentclass' => $studclass
        ];

        return view('studentclass.edit',$data);
    }

    public function update(Request $request,$id){
        $studclass = studentclass::find($id);
        $studclass->classname = $request->classname;
        $studclass->school_year = $request->school_year;
        $studclass->level = $request->level;
        $studclass->save();

        return redirect('studentclass');
    }

    public function delete($id){
        $studclass = studentclass::find($id);
        $studclass->delete();

        return back();
    }
}
