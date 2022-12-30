<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    /**
    * The primary key associated with the table.
    *
    * @var string
    * @var bool
    * @var array
    */
    protected $primaryKey = 'mid';
    public $incrementing = false;
    protected $fillable=[
        'mid',
        'nama',
        'umur',
        'jenis_kelamin',
        'produk',
        'kota',
        'negara'
    ];
    public function order()
    {
        return $this->hasMany(Order::class, 'foreign_key');
    }
}
