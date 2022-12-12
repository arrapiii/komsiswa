<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
use App\Models\Pelanggaran;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = ['siswa', 'kelas', 'jurusan', 'nis', 'jeniskelamin', 'alamat', 'notelp', 'email', 'password', 'guru_id'];

    public function guru() {
        return $this->belongsTo(Guru::class);
    }

    public function relationsToPelanggaran() {
        return $this->belongsToMany(Pelanggaran::class);
    }
}
