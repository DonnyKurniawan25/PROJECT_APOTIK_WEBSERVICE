@extends('layout2.app')

@section('content')

<hr>
<hr>
<div class="row">
    <div class="col-md-8 offset-md-2">
<div class="form-group">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h4 align="center" style="font-family: arial; margin-top: 30px; margin-bottom: 20px">TAMBAH OBAT </h4>
			<form method="post" action="{{route('produk.store')}}">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label>Nama Obat</label>
			    <input type="text" class="form-control" placeholder="Masukkan Nama Obat" name="nama">
			  </div>
			  <div class="form-group">
			    <label>QTY</label>
			    <input type="text" class="form-control" placeholder="Masukkan Quantity" name="qty">
			  </div>
			  <div class="form-group">
			    <label>Harga</label>
			    <input type="text" class="form-control" placeholder="Masukkan Harga Obat" name="harga">
			  </div>
			  <div class="form-group">
			    <label>Nama Obat</label>
			    <select class="form-control" name="idkategori">
			    	@foreach($jenis as $jen)
			    		<option value="{{ $jen -> id  }}">{{ $jen -> nama_obat }}</option>
			    	@endforeach
			    </select>
			  </div>
			  <button type="submit" class="btn btn-primary">SIMPAN</button>
			  <button type="reset" class="btn btn-danger">HAPUS</button>
			</form>
		</div>
		<div class="col-md-4"></div>	
	</div>
</div>
</div>
</div>
@endsection