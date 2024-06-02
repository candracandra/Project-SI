<?php

namespace App\Http\Controllers;

use App\Models\ModelSiswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $tb_siswa = ModelSiswa::all();
        return view('siswa.siswa', compact('tb_siswa'));
    }
    
}
