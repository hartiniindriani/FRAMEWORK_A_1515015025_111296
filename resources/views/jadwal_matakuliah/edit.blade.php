@extends('master')
@section('container')
<div class="panel panel-primary">
<div class="panel-heading">
	<strong><a href="{{ url('jadwalmatakuliah') }}">
	<i class="fa text-default fa-chevron-left"></i></a>
	Perbarui jadwal Matakuliah</strong>
	</div>
		{!! Form::model($jadwal_matakuliah,['url'=>'jadwal_matakuliah/edit/'.$jadwal_matakuliah->id,'class'=>'form-horizontal  ']) !!}
		@include('jadwal_matakuliah.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset"class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop