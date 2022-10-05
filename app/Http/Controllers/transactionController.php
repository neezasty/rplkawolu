<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use App\Models\product;
use App\Models\detail_transaction;

class transactionController extends Controller
{
    //
    public function index(){
        $transaction = transaction::all();

        $data = [
            'transaction' =>$transaction
        ];

        return view('transaction.index',$data);
    }

    public function create(){
        $data = [
            'product' =>product::all(),
        ];
        return view('transaction.create', $data);
    }

    public function store(Request $request){ // fungsi untuk menyimpan
        //dd($request);
        $total = 0;

        $transaction = new transaction();
        $transaction->datetime = $request->datetime;
        $transaction->total = $total;
        $transaction->save();

        $id_transaction = $transaction->id;

        for($i=0; $i < count($request->product); ++$i){
            $detail_transaction = new detail_transaction();
            $detail_transaction->id_product = $request->product[$i];
            $detail_transaction->qty = $request->qty[$i];
            $detail_transaction->id_trans = $id_transaction;
            $detail_transaction->save();

            //mengambil data dari DB berdasarkan ID
            $product = product::find($request->product[$i]); // find khusus primary key saja
            $before_stock = $product->stock;
            $purchase_amount = $request->qty[$i];
            $product->stock = $before_stock - $purchase_amount;
            $product->save();

            $price = $product->price;
            $sub_total = $price * $purchase_amount;
            $total = $total + $sub_total;
            // echo $product->name." - ".$product->stock."</br>";
        }

        $transaction = transaction::find($id_transaction);
        $transaction->total = $total;
        $transaction->save();

        return redirect('transaction');
    }

    public function delete($id){
        $transaction = transaction::find($id);
        $transaction->delete();

        return back();
    }

    public function get_details(Request $request){
        $detail_transaction = detail_transaction::join('product', 'detail_transaction.id_product', '=', 'product.id')
                                ->where('detail_transaction.id_trans', '=', $request->id_transaction)
                                ->get();

        return response()->json(
            [
                'detail_transaction'=>$detail_transaction,
            ],
            200
        );
    }
}
