<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'order',
        'tanggal_pembelian',
        'tanggal_kedatangan',
        'seller',
        'seller_id',
        'keterangan'
    ];
}
