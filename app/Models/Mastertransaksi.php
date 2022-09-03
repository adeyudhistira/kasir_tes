<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mastertransaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi_pembelian';
    protected $fillable = [
        'total_harga',
    ];
}
