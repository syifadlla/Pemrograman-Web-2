<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaParkir extends Model
{
    use HasFactory;
    protected $table = 'area_parkir';
    protected $fillable = [
        'nama',
        'kapasitas',
        'keterangan',
        'kampus_id',
    ];

    // Relasi ke model Kampus
    public function kampus()
    {
        return $this->belongsTo(Kampus::class);
    }


}
