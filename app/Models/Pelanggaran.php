<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $table = 'pelanggarans';
    protected $guarded = [];
    protected $fillable = ['pelanggaran_siswa', 'tindaklanjut', 'jumlahpoin'];

    public function relationsToSiswa(){
        return $this->belongsToMany(Siswa::class);
    }

}
