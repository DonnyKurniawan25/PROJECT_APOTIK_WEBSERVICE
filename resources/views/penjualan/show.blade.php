@extends('layout2.app')

@section('content')

<hr>
<hr>
<div class="row">
    <div class="col-md-8 offset-md-2">
<hr>
<h2>Detail Penjualan</h2>
<a  href="{{ route('detail.index') }}"><button class="btn btn-primary float-right">
            Detail Penjualan
     </button> </a>
        
<h5>Nama Pembeli : {{ $data->nama_pembeli }}</h5>
<h5>Nama Karyawan : {{ $data->karyawan->nama_karyawan }}</h5>
<h5>Tanggal : {{ $data->tanggal }}</h5>

<table class="table table-bordered">
    <tr>
        <td>Nama Barang</td>
        <td>Qty</td>
        <td>Harga</td>
        <td>Sub Total</td>
        <td>Aksi</td>
    </tr>
    @php
    $total = 0;
    @endphp
    @foreach($data -> detail as $pen)
    <tr>
        <td>{{ $pen->produk->nama }}</td>
        <td>{{ $pen->jumlah }}</td>
        <td>{{ $pen->produk->harga}}</td>
        <td>Rp. {{ number_format($pen->produk->harga * $pen->jumlah)}}</td>
        <td>
            <form method="post" action="{{ route('detail.destroy',$pen->id) }}">
                {{ csrf_field() }}
                            
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();"><span class="fa fa-trash-o"></span></button> 
                        </form>     
        </td>
    </tr>
    <?php $total += $pen->produk->harga * $pen->jumlah ?>
    @endforeach
</table>
<h5>
    <strong>
        Total Harga : Rp. {{ number_format($total) }}
    </strong>
</h5>

<button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus">Tambah Penjualan</i>
        </button>

<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Detail</h5>
      </div>
      <div class="modal-body">
        <form action="{{ route('detail.store') }}" method="post">
            {{ csrf_field() }}
        <input type="hidden" name="idpenjualan" value="{{ $data->id }}">
        <input type="hidden" name="idkaryawan" value="{{$data->karyawan->id}}">
        <div class="form-group">
            <label>Nama Barang</label>
            <select name="idproduk" class="form-control">
                <option value="">Pilih</option>
                @foreach($barang as $b)
                <option value="{{ $b->id }}">{{ $b->nama }} - Rp. {{ $b->harga }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>QTY</label>
            <input type="number" name="jumlah" class="form-control">
        </div>
        <button type="submit" name="submit"> Simpan </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection