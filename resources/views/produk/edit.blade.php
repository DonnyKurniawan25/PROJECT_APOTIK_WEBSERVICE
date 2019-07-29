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
			<h3 align="center" style="font-family: arial; margin-top: 30px; margin-bottom: 20px">UPDATE DETAIL OBAT</h3>
		<form method="post" action="{{route('produk.update',['id'=>$editproduk->id])}}">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PUT">
			  <div class="form-group">
			    <label>Nama Obat</label>
			    <input type="text" class="form-control" placeholder="Masukkan Nama Obat" name="nama"  value="{{ $editproduk->nama }}">
			  </div>
			  <div class="form-group">
			    <label>QTY</label>
			    <input type="text" class="form-control" placeholder="Masukkan Quantity" name="qty" value="{{ $editproduk->qty }}">
			  </div>
			  <div class="form-group">
			    <label>Harga Beli</label>
			    <input type="text" class="form-control" placeholder="Masukkan Harga Beli" name="harga" value="{{ $editproduk->harga }}">
			  </div>
			  <div class="form-group">
			    <label>ID Jenis</label>
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