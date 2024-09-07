<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';//untuk memperkuat variabel berbahasa indo
    protected $fillable = [
        'durasi_pendidikan',
        'nama_sekolah',
        'alamat_sekolah',
        'tingkat',
        'jurusan_sekolah',
        'deskripsi_pendidikan'
    ];
}
