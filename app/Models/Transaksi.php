<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'tanggal',
        'mulai',
        'akhir',
        'keterangan',
        'biaya',
        'kendaraan_id',
        'area_parkir_id',
    ];

    // Relasi ke model Kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    // Relasi ke model AreaParkir
    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }
}
