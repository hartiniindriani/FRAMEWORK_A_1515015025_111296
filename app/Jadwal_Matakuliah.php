<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
  protected $table= 'jadwal_matakuliah';
  protected $fillable= ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
    //
  public function jadwal_matakuliah(){
  	return $this->belongsTo(Jadwal_Matakuliah::class);
  }
  public function mahasiswa(){
  	return $this->belongsTo(Mahasiswa::class);
  }
  public function ruangan (){
  	return $this->belongsTo(Ruangan::class);
  }
}

