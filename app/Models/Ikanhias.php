<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikanhias extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jenis', 'usia', 'harga', 'stok', 'deskripsi', 'gambar'];
}