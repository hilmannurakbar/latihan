@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1> Data siswa </h1></center>
	<div class="panel panel-primary">
			<div class="panel-heading"> Data siswa
			<div class="panel-title pull-right"> <a href="{{ URL::previous ()}}"> Kembali </a></div></div>

			<div class="panel-body">
				<form action="{{ route('siswa.show',$siswa->id) }}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token () }}">

				<div class="form-group">
					<label class="control-lable"> Nama </label>
					<input type="text" name="a" value="{{ $siswa->nama }}" class="form-control" required="">

				<div class="form-group">
					<label class="control-lable"> Nama Orangtua </label>
					 <select name="b" class="form-control" readonly="">
						@foreach($ortu as $data)
							<option value="{{$data->id}}"> {{$data->nama_ayah}} dan {{$data->nama_ibu}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable"> Umur </label>
						<input type="text" name="c" value="{{$siswa->umur}}" class="form-control"  >
				</div>
				<div class="form-group">
					<label class="control-lable"> Alamat </label>
					<textarea class="form-control" rows="10"  name="d" required=""> {{ $siswa->alamat }} </textarea>
				</div>
			<div class="form-group">
		<label class="control_lable">jenis kelamin</label>
		<input type="text" name="jk" value="{{$siswa->jk}}" class="form-control"  >
		</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success"> Simpan </button>
					<button type="reset" class="btn btn-danger"> Reset </button>
					</div>
			</form>
		</div>
	</div>
</div>
@endsection