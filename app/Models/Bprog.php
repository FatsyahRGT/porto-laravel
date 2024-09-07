<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bprog extends Model
{
    use HasFactory;
    protected $table = 'bahasa_pemrograman';//untuk memperkuat variabel berbahasa indo
    protected $fillable = [
        'nama_bahasa_pemrograman'
    ];
}
