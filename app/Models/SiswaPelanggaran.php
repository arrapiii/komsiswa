<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaPelanggaran extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran_siswa';
    protected $guarded = [];
    protected $fillable = ['siswa_id', 'pelanggaran_id'];
    
}
