@extends('layouts.master')
@section('isi')

@foreach ($ortu as $data) <hr> 
nama ibu  : {{$data->nama_ibu}}<br>
nama ayah : {{$data->nama_ayah}}<br> 
umur ibu : {{$data->umur_ibu}}<br>
umur ayah : {{$data->umur_ayah}}<br>
nama anak :
		@foreach ($data->siswa as $key) 
		<li>{{$key->nama}}</li>
		@endforeach
		<hr>
	@endforeach
@endsection