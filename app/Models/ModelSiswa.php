<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_absen',
        'nama',
        'kelas',
    ];
    protected $table = 'tb_siswa';
}
