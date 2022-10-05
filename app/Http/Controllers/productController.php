<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index(){
        $product = product::all();

        $data = [
            'product' =>$product
        ];

        return view('product.index',$data);
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){ // fungsi untuk menyimpan
        //dd($request);
        $product = new product();

        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->stock = $request->stock;

        $random = rand(0,99999);
        $pict = "pict_".$random.".".$request->pict->extension();
        $request->pict->move(public_path('images'),$pict);
        $product->pict=$pict;

        $product->price = $request->price;

        $product->save();

        return redirect('product');
    }

    public function delete($id){
        $product = product::find($id);
        $product->delete();

        return back();
    }
}
