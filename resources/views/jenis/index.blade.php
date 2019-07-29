@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-10" style="margin-left: 110px;margin-top: 70px" >             
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <a class="btn btn-primary" href="{{route('jenis.create')}}"><i class="fa fa-plus"> Tambah Jenis Obat</i></a>
        <hr>
        <tr class="table-primary" style="background: #4ECDC4; color: white">
        <td>ID</td>
        <td>Jenis Obat</td>
        <td>Daftar Obat</td>
        <td>Aksi</td>
    </tr>
    </thead>
    @foreach($data as $v)
    <tbody>    
    <tr>
        <td>{{ $v->id }}</td>
        <td>{{ $v->nama_obat }}</td>
        <td>
            @foreach($v->produk as $pro)
            {{$pro->nama}}<br>
            @endforeach
        </td>
        <td>
            
            <form action="{{ route('jenis.destroy', ['id'=>$v->id]) }}" method="post">
                <a class="btn btn-primary" href="{{route('jenis.edit',['id'=>$v->id])}}"><span class="fa fa-pencil"></span></a>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();">
                    <span class="fa fa-trash-o">
                </button>
            </form>
        </td>
    </tr>
    </tbody>
    @endforeach
</table>
        </div>
    </div>
@endsection