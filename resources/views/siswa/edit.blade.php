@extends('layout.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group">
							<label for="exampleInputEmail1">Nama depan</label>
							<input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->nama_depan}}">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Nama belakang</label>
							<input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->nama_belakang}}">
						</div>

						<div class="form-group">
							<label for="exampleFormControlSelect1">Jenis kelamin</label>
							<select  name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
								<option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>L</option>
								<option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>P</option>
							</select>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Agama</label>
							<input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->agama}}">
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Alamat</label>
							<textarea name="alamat" class="form-control" 
							id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Avatar</label>
							<input type="file" name="avatar" class="form-control"> 
						</div>

					</div>
					<button type="submit" class="btn btn-warning">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@stop
@section('content')
<h1>EDIT DATA SISWA</h1>
@if(session('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	{{session('sukses')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
<div class="row">
	<div class="col-lg-12">
		<form action="/siswa/{{$siswa->id}}/update" method="POST">
			{{csrf_field()}}
			<div class="form-group">
				<label for="exampleInputEmail1">Nama depan</label>
				<input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->nama_depan}}">
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Nama belakang</label>
				<input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->nama_belakang}}">
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect1">Jenis kelamin</label>
				<select  name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					<option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>L</option>
					<option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>P</option>
				</select>
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Agama</label>
				<input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->agama}}">
			</div>

			<div class="form-group">
				<label for="exampleFormControlTextarea1">Alamat</label>
				<textarea name="alamat" class="form-control" 
				id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
			</div>

		</div>
		<button type="submit" class="btn btn-warning">Update</button>
	</form>
</div>
</div>
@endsection

