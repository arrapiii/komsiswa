<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Pelanggaran;
use App\Models\SiswaPelanggaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = ['_token', 'siswa', 'kelas', 'jurusan', 'nis', 'jeniskelamin', 'alamat', 'notelp', 'email', 'password', 'guru_id'];

    public function guru() {
        return $this->belongsTo(Guru::class);
    }

    public function relationsToPelanggaran() {
        return $this->belongsToMany(Pelanggaran::class,SiswaPelanggaran::class);
    }
}
