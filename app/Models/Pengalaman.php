<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;
    protected $table = 'pengalaman';//untuk memperkuat variabel berbahasa indo
    protected $fillable = [
        'durasi',
        'posisi',
        'alamat',
        'perusahaan',
        'deskripsi'
    ];
}
