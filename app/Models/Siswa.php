<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kelas',
        'jurusan',
    ];

    public function absensi()
    {
        return $this->hasMany(Absen::class, 'siswa_id');
    }
}
