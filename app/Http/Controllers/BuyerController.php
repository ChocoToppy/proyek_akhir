<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerController extends Controller
{
    public function index(){
        return view('input-buyer');
    }
    public function show(){
        $model = new Buyer;
        $data=$model->all();
        return view('tampil-buyer',['data'=>$data]);
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'id'=>['required','min:3','unique:buyers'],
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'jenis_kelamin'=>'required',
            'alamat'=>'required',
            'kota'=>'required',
            'negara'=>'required'
        ]);
        Buyer::create($validatedData);
        return redirect('tampil-buyer')->with('status', 'Data Buyer Telah Dimasukan');
    }
    public function delete($id){
        $model = Buyer::find($id);
        $model->delete();
        return redirect('tampil-buyer')->with('status-deleted','Data Buyer Telah Dihapus');
    }
    public function edit($id){
        $model= Buyer::find($id);
        // dd($model);
        return view('edit-buyer')->with('post',$model);
    }
    public function update(Request $request, $id){
        $model= Buyer::find($id);
        $rules = [
            'nama'=>'required',
            'umur'=>'required|min:1|max:3',
            'jenis_kelamin'=>'required',
            'alamat'=>'required',
            'kota'=>'required',
            'negara'=>'required'
        ];
        if ($request->id != $model->id) {
            $rules['id'] = 'required|unique:buyers';
        }
        $validatedData=$request->validate($rules);
        Buyer::where('id', $model->id)
            ->update($validatedData);
        return redirect('tampil-buyer')->with('status', 'Data Buyer Telah Diperbarui');
    }
}

