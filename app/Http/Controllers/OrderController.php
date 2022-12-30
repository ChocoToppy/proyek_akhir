<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Seller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $seller = Seller::all();
        // dd($seller);
        return view('input-order',compact('seller'));
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'order'=>['required','min:3'],
            'tanggal_pembelian'=>'required','date',
            'tanggal_kedatangan'=>'required', 'date',
            'id_seller'=>'required',
            'keterangan'=>'required'
        ]);
        $mid=$request->id_seller;
        $model=Seller::find($mid);
        $nama=$model->nama;

        $order=$validatedData['order'];
        $tanggal_pembelian=$validatedData['tanggal_pembelian'];
        $tanggal_kedatangan=$validatedData['tanggal_kedatangan'];
        $id_seller= $validatedData['id_seller'];
        $keterangan= $validatedData['keterangan'];
        // dd($isi);
        Order::create([
            'order'=>$order,
            'tanggal_pembelian'=>$tanggal_pembelian,
            'tanggal_kedatangan'=>$tanggal_kedatangan,
            'seller'=>$nama,
            'seller_id'=>$id_seller,
            'keterangan'=>$keterangan
        ]);
        return redirect('tampil-order')->with('status', 'Order Buyer Telah Dimasukan');
    }
    public function show(){
        $model = new Order();
        $data = $model->all();
        return view('tampil-order',['data'=>$data]);
    }
    public function delete($id){
        $model = Order::find($id);
        $model->delete();
        return redirect('tampil-order')->with('status-deleted','Data Order Telah Dihapus');
    }
    public function edit($id){
        $model= Order::find($id);
        $seller = Seller::all();
        return view('edit-order',compact('seller'))->with('post',$model);
    }
    public function update(Request $request, $id){
        $model= Order::find($id);
        $validatedData = $request->validate([
            'order'=>['required','min:3'],
            'tanggal_pembelian'=>'required','date',
            'tanggal_kedatangan'=>'required', 'date',
            'id_seller'=>'required',
            'keterangan'=>'required'
        ]);
        $mid=$request->id_seller;
        $seller=Seller::find($mid);
        $nama=$seller->nama;

        $order=$validatedData['order'];
        $tanggal_pembelian=$validatedData['tanggal_pembelian'];
        $tanggal_kedatangan=$validatedData['tanggal_kedatangan'];
        $id_seller= $validatedData['id_seller'];
        $keterangan= $validatedData['keterangan'];
        // dd($model->id);
        Order::where('id', $model->id)
            ->update([
                'order'=>$order,
                'tanggal_pembelian'=>$tanggal_pembelian,
                'tanggal_kedatangan'=>$tanggal_kedatangan,
                'seller'=>$nama,
                'seller_id'=>$id_seller,
                'keterangan'=>$keterangan
            ]);
        return redirect('tampil-order')->with('status', 'Data Order Telah Diperbarui');
    }
}

