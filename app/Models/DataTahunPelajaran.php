<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTahunPelajaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun_pelajaran',
    ];

    public function dataRombel()
    {
        return $this->hasMany(DataRombel::class);
    }
}
