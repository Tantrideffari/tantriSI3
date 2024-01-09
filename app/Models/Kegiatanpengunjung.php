<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Kegiatanpengunjung extends Model
{
    use HasFactory;

    protected $table = 'tb_kegiatanpengunjung'; 

    protected $fillable = [
        'id_pengunjung', 'id_kegiatan'
    ];

    public function pengunjung(): HasOne
    {
        return $this->hasOne(Pengunjung::class, 'id', 'id_pengunjung');
    }

    public function kegiatan(): HasOne
    {
        return $this->hasOne(Kegiatan::class, 'id', 'id_kegiatan');
    }

}
