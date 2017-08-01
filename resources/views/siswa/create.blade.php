
@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>data siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">data siswa
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div>
</div>

<div class="panel-body">
	<form action="{{route('siswa.store')}}"method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label class="control_lable">nama</label>
		<input type="text" name="a" class="form-control"required="">
	</div>
	<div class="form-group">
		<label class="control_lable">nama orang tua</label>
			<select name="b" class="form-control">
						@foreach($ortu as $data)
							<option value="{{$data->id}}"> {{$data->nama_ayah}} dan {{$data->nama_ibu}}</option>
						@endforeach
					</select> 
	<div class="form-group">
		<label class="control_lable">umur</label>
		<input type="number" name="c" class="form-control" required="">
	</div>
	<div class="form-group">
		<label class="control_lable">jenis kelamin</label>
		<input type="radio" name="jk" class="form-control" value="perempuan" >perempuan
		<input type="radio" name="jk" class="form-control" value="laki-laki" >laki-laki
		</div>
	<div class="form-group">
		<label class="control_lable">alamat</label>
		<textarea class="form-control" rows="10" name="d" required=""></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">simpan</button>
		<button type="reset" class="btn btn-denger">reset</button>
	</div>
	</form>
	</div>
	</div>
</div>

@endsection