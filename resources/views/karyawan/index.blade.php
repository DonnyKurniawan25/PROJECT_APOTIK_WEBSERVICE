@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-10" style="margin-left: 110px;margin-top: 70px" >             
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <a href="{{ route('karyawan.create') }}"><button class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus">Tambah Karyawan</i></button></a>
    <hr>
    <thead>
    <tr class="table-primary" style="background: #4ECDC4; color: white">
        <th>ID</th>
        <td>Nama Karyawan</th>
        <td>Alamat</th>
        <td>Nomor Telpon</th>
        <th>Pembeli</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $v)
    <tr>
        <td>{{ $v->id }}</td>
        <td>{{ $v->nama_karyawan }}</td>
        <td>{{ $v->alamat }}</td>
        <td>{{ $v->notelp }}</td>
        <td>
            @foreach($v->penjualan as $pen)
            {{$pen->nama_pembeli}}<br>
            @endforeach
        </td>      
        <td>
            
            <form action="{{ route('karyawan.destroy', ['id'=>$v->id]) }}" method="post">
                <a class="btn btn-primary" href="{{route('karyawan.edit',['id'=>$v->id])}}"><span class="fa fa-pencil"></span></a>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();">
                    <span class="fa fa-trash-o">
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
@endsection