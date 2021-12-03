<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikanhias extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'ukuran', 'usia', 'harga', 'stok', 'deskripsi', 'gambar'];
}