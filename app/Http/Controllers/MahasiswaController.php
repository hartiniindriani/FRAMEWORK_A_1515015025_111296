<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
	public function awal()
	{
		return "kesaahhh";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$mahasiswa = new Mahasiswa();
		$mahasiswa->nama = 'iki';
		$mahasiswa->nim = '1515015033';
		$mahasiswa->alamat= 'dihati opa';
		$mahasiswa->pengguna_id= '2';
		$mahasiswa->save();
		return "data dengan nama {$mahasiswa->nama} telah disimpan";
	}
    //
}
