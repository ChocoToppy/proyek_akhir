<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Models\Order;
use App\Models\Seller;


class DashboardController extends Controller
{
    public function mount(){
    }
    public function index(){
        $data=Seller::select('umur')->get()->groupBy('umur');
        // dd($data);
        $jumlah_seller=Seller::count();
        $umurs=[];
        $umurCount=[];
        foreach($data as $umur => $values){
            $umurs[]=$umur;
            $umurCount[]=count($values);
        }

        $item=Buyer::select('jenis_kelamin')->get()->groupBy('jenis_kelamin');
        $jumlah_byr= Buyer::count();
        $genders=[];
        $genderCount=[];
        foreach($item as $gender => $values){
            $genders[]=$gender;
            $genderCount[]=count($values);
        }
        // dd($genders,$genderCount);
        $jumlah_order=Order::count();
        // dd($jumlah_order);
        return view('dashboard',['data'=>$data,
                                'umurs'=>$umurs,
                                'umurCount'=>$umurCount,
                                'item'=>$item,
                                'genders'=>$genders,
                                'genderCount'=>$genderCount,
                                'jumlah_seller'=>$jumlah_seller,
                                'jumlah_byr'=>$jumlah_byr,
                                'jumlah_order'=>$jumlah_order
                                ]);
    }
}
