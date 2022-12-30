<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){
        return view('input-seller');
    }
    public function show(){
        $model = new Seller();
        $data=$model->all();
        return view('tampil-seller',['data'=>$data]);
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'mid'=>['required','min:3','unique:sellers'],
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'jenis_kelamin'=>'required',
            'produk'=>'required',
            'kota'=>'required',
            'negara'=>'required'
        ]);
        Seller::create($validatedData);
        return redirect('tampil-seller')->with('status', 'Data Seller Telah Dimasukan');
    }
    public function delete($mid){
        $model = Seller::find($mid);
        $model->delete();
        return redirect('tampil-seller')->with('status-deleted','Data Seller Telah Dihapus');
    }
    public function edit($mid){
        $model= Seller::find($mid);
        return view('edit-seller')->with('post',$model);
    }
    public function update(Request $request, $mid){
        $model= Seller::find($mid);
        $rules = [
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'jenis_kelamin'=>'required',
            'produk'=>'required',
            'kota'=>'required',
            'negara'=>'required'
        ];
        if ($request->mid != $model->mid) {
            $rules['mid'] = 'required|unique:seller';
        }
        $validatedData=$request->validate($rules);
        Seller::where('mid', $model->mid)
            ->update($validatedData);
        return redirect('tampil-seller')->with('status', 'Data Seller Telah Diperbarui');
    }
}