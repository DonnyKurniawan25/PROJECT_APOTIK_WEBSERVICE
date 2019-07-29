@extends('layout2.app')

@section('content')

<hr>
<hr>
<div class="row">
    <div class="col-md-8 offset-md-2">
<form method="post" action="{{route('karyawan.store')}}">
	{{ csrf_field() }}
	<h3 style="margin-left: 150px">TAMBAH DATA KARYAWAN</h3>
	<hr>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nama Karyawan</label>
		<div class="col-sm-8">
			<input type="text" name="namakaryawan" class="form-control" placeholder="Masukkan Nama Karyawan">
		</div>
	</div>
		<div class="form-group row">
		<label class="col-sm-2 col-form-label">Alamat</label>
		<div class="col-sm-8">
			<textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat"></textarea>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">No Telfon</label>
		<div class="col-sm-8">
			<input type="text" name="notelp" class="form-control" placeholder="Masukkan Nomor Telfon">
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-10 offset-sm-2">
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="reset" class="btn btn-danger">Batal</button>
		</div>
	</div>
</form>
</div>
</div>

@endsection