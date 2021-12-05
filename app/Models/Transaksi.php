<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['harga_total', 'status', 'kurir', 'payment', 'deadline'];

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}