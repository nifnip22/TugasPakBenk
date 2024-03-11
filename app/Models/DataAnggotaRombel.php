<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggotaRombel extends Model
{
    use HasFactory;

    protected $fillable = [
        'rombel_id',
        'user_id',
    ];

    public function dataRombel()
    {
        return $this->belongsTo(DataRombel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dataPengajaran()
    {
        return $this->hasMany(DataPengajaran::class);
    }
}
