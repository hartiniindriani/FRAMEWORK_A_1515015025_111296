<div class="form-group">
	<label class="col-sm-2 control-label">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','placeholder'=>"Mahasiswa"]) !!}
		</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_matakuliah_id',$dosen_matakuliah->listDosendanMatakuliah(),null,['class'=>'form-control','placeholder'=>"Dosen"]) !!}
		</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','placeholder'=>"Ruangan"]) !!}
		</div>
</div>