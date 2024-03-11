<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRombel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_rombel',
        'tahun_pelajaran_id',
    ];

    public function dataTahunPelajaran()
    {
        return $this->belongsTo(DataTahunPelajaran::class);
    }

    public function dataAnggotaRombel()
    {
        return $this->hasMany(DataAnggotaRombel::class);
    }
}
