<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
   public function awal()
	{
		return "laman dosen";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen = new Dosen();
		$dosen->nama ='Hario';
		$dosen->nip = '123456789';
		$dosen->alamat= 'dihatiku senang';
		$dosen->pengguna_id= '1';
		$dosen->save();
		return "data dengan dosen {$dosen->nama} telah disimpan";
	} 
    //
}
