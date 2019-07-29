@extends('layout.app')

@section('content')  

<div class="row">
    <div class="col-md-10" style="margin-left: 110px;margin-top: 70px" >             
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <hr>
            <thead>
            <tr class="table-primary"  style="background: #4ECDC4; color: white">
                <th>Id Detail Penjualan</th>
                <th>Nama Pembeli</th>
                <th>Nama Barang</th>
                <th>Nama Karyawan</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $p)      
                <tr>
                	<td>{{ $p->id}}</td> 
                	<td>{{ $p->penjualan->nama_pembeli}}</td>            
                    <td>{{ $p->produk->nama }}</td>  
                    <td>{{ $p->karyawan->nama_karyawan}}</td>
                     
                    <td>{{ $p->jumlah}}</td>
                    <td>
                        
                    <form method="post">
                            <a href="{{ route('penjualan.show',$p->penjualan_id) }}" class="btn btn-primary"><span class="fa fa-pencil">Lihat Detail Pembayaran</span></a>
                        </form>    
                    </td>             
                </tr>    
                @endforeach 
            
            </tbody>
        </table>
    </div>
</div>
@endsection
