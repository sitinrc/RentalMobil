<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'nama_mobil',
        'merk',
        'tahun',
        'harga_sewa',
    ];
}
