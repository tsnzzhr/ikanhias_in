<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKeranjang extends Model
{
    use HasFactory;

    public function ikanHias()
    {
        return $this->belongsTo(Ikanhias::class);
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }
}