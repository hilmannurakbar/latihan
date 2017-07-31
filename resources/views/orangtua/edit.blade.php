
@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>data orang tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">data orang tua
	<div class="pane-title-pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div>
</div>

<div class="panel-body">
	<form action="{{route('orangtua.update',$ortu->id)}}"method="post">
	<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{
	csrf_token() }}">
	<div class="form-group">
		<label class="control_lable">nama ayah</label>
		<input type="text" name="a" value="{{$ortu->nama_ayah}}" class="form-control" required="">
	</div>
	<div class="form-group">
		<label class="control_lable">nama ibu</label>
		<input type="text" name="b" value="{{$ortu->nama_ibu}}" class="form-control" required="">
	<div class="form-group">
		<label class="control_lable">umur ayah</label>
		<input type="number" name="c" value="{{$ortu->umur_ayah}}" class="form-control" required="">
	</div>
	<div class="form-group">
		<label class="control_lable">umur ibu</label>
		<input type="number" name="d" value="{{$ortu->umur_ibu}}"class="form-control" required="">
	<div class="form-group">
		<label class="control_lable">alamat</label>
		<textarea class="form-control" rows="10" name="e" required="">{{$ortu->alamat}}</textarea>
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