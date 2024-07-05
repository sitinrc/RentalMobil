<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobil_id', 
        'pelanggan_id', 
        'tanggal_mulai', 
        'tanggal_selesai', 
        'total_harga'
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
