<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $fillable = ['jumlah', 'harga'];

    public function detailKeranjang()
    {
        return $this->hasMany(DetailKeranjang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}