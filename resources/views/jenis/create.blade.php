@extends('layout2.app')

@section('content')

<hr>
<hr>

<div class="row">
    <div class="col-md-8 offset-md-2">
<form method="post" action="{{route('jenis.store')}}">
	{{ csrf_field() }}
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Jenis Obat</label>
		<div class="col-sm-8">
			<input type="text" name="namaobat" class="form-control">
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