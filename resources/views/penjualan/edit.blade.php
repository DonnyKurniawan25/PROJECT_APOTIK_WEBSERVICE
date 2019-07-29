@extends('layout2.app')

@section('content') 
<body>
	<hr>
	<hr>
	<div class="form-group">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3 align="center" style="font-family: arial; margin-top: 30px; margin-bottom: 20px">EDIT PENJUALAN</h3>
			<form method="post" action="{{route('penjualan.update',['id'=>$jual->id])}}">
				{{ csrf_field() }}
				{{ method_field('PUT')}}
				<div class="form-group">
			    <label>Nama Pembeli</label>
			    <input type="text" name="namapembeli" class="form-control" value="{{ $jual->nama_pembeli}}">
			    </div>
			   <div class="form-group">
			    <label for="pelanggannama">Nama Karyawan</label>
			    <select class="form-control" name="idkaryawan">
			    	@foreach($karyawan as $kar)
			    	<option value="{{ $kar -> id  }}">{{ $kar -> nama_karyawan }}</option>
			    	@endforeach
			    </select>
			  </div>
			  <div class="row">
				 <div class="col-lg-12">
				  <div class="form-group">
				   <label>Tanggal Penjualan</label>
				      <input type="date" name="tanggal" class="form-control" value="{{ $jual -> tanggal }}">
				   </div>
				  </div>
				 </div>
			  <button type="submit" class="btn btn-primary">SIMPAN</button>
			  <button type="reset" class="btn btn-danger">HAPUS</button>
			</form>
	</div>
</div>
</body>
@endsection
