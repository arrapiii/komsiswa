<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'guru', 'nip', 'matpel', 'tgllahir', 'tempatlahir', 'jeniskelamin', 'notelp', 'agama', 'email', 'password'];

    public function siswa() {
        return $this->hasMany(Siswa::class);
    }
}
