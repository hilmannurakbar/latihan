@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1> Data siswa </h1></center>
	<div class="panel panel-primary">
			<div class="panel-heading"> Data siswa
			<div class="panel-title pull-right"> <a href="{{ URL::previous ()}}"> Kembali </a></div></div>

			<div class="panel-body">
				
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token () }}">

				<div class="form-group">
					<label class="control-lable"> Nama  </label>
					<input type="text" name="a" value="{{ $siswa->nama }}" class="form-control" readonly="">

				<div class="form-group">
					<label class="control-lable"> Nama Orangtua </label>
					<input type="text" name="b" value="{{$siswa->orang_tua->nama_ayah}} dan {{$siswa->orang_tua->nama_ibu}}" readonly="" class="form-control">
					</select>				
					</div>

				<div class="form-group">
					<label class="control-lable"> Umur  </label>
					<input type="number" name="c" value="{{ $siswa->umur }}" class="form-control" readonly="">
				</div>

				<div class="form-group">
					<label class="control-lable"> Alamat </label>
					<textarea class="form-control" rows="10"  name="d" readonly=""> {{ $siswa->alamat }} </textarea>
				</div>
			
		</div>
	</div>
</div>
@endsection