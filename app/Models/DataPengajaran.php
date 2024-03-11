<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengajaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'anggota_rombel_id',
        'guru_id',
        'pelajaran',
        'subject',
        'waktu_pelajaran',
        'mulai_pada',
        'berakhir_pada',
        'tanggal_pelajaran',
    ];

    public function dataAnggotaRombel()
    {
        return $this->belongsTo(DataAnggotaRombel::class);
    }

    public function dataGuru()
    {
        return $this->belongsTo(DataGuru::class);
    }
}
