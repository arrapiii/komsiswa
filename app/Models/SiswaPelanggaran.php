<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaPelanggaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false; 

    public function relationsToPelanggaran()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function relationsToSiswa()
    {
        return $this->belongsTo(Pelanggaran::class);
    }


    
}
