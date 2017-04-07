@extends('master')
@section('container')
<div class="panel panel-primary">
<div class="panel-heading">
	<strong><a href="{{ url('jadwalmatakuliah') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui dosen Matakuliah</strong>
	</div>
		{!! Form::model($dosen_matakuliah,['url'=>'dosen_matakuliah/edit/'.$dosen_matakuliah->id,'class'=>'form-horizontal  ']) !!}
		@include('dosen_matakuliah.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset"class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop