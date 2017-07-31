@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1> data orang tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">data orangtua
		<div class="panel-title pull-right"><a href="/orangtua/create">tambah data
		</a></div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>nama ayah</th>
						<th>nama ibu</th>
						<th>umur ayah</th>
						<th>umur ibu</th>
						<th>alamat</th>
						<th>nama anak</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($ortu as $data)
				<tr>
				<td>{{$data->nama_ayah}}</td>
				<td>{{$data->nama_ibu}}</td>
				<td>{{$data->umur_ayah}}</td>
				<td>{{$data->umur_ibu}}</td>
				<td>{{$data->alamat}}</td>
				<td>
				@foreach($data->siswa as $a)
				<li>{{$a->nama}}</li>
				@endforeach
				</td>
				<td>
				<a class="btn btn-warning" href="/orangtua/{{$data->id}}/edit">Edit</a>|</td>
				<td>
				<a class="btn btn-info" href="/orangtua/{{$data->id}}">show</a>|</td>
				<td><form action="{{route('orangtua.destroy',$data->id)}}" method="post">

				<input name="_method" type="hidden" value="DELETE">
				<input name="_token" type="hidden" >
				<input class="btn btn-danger" type="submit" value="Delete">
				{{csrf_field()}}
				</form>
				</td>
			</tr>
			@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>

@endsection