@extends('layout.app')

@section('content')  
<div class="row">
    <div class="col-md-10" style="margin-left: 110px;margin-top: 70px" >             
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <a href="{{ route('penjualan.create') }}"><button name="tambah" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus">Tambah data jual</i></button></a>
            <hr>
            <thead>
            <tr class="table-primary" style="background: #4ECDC4; color: white">
                <th>Id Jual</th>
                <th>Nama Pembeli</th>
                <th>Nama Karyawan </th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $p)      
                <tr>             
                    <td>{{ $p->id }}</td>       
                    <td>{{ $p->nama_pembeli}}</td>
                    <td>{{ $p->karyawan->nama_karyawan}}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>
                        
                    <form method="post" action="{{ route('penjualan.destroy',$p->id) }}">
                        <a class="btn btn-primary" href="{{route('penjualan.edit',['id'=>$p->id])}}"><span class="fa fa-pencil"></span></a>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();"><span class="fa fa-trash-o"></span></button> 
                    </form>    
                    </td>             
                </tr>    
                @endforeach 
            
            </tbody>
        </table>
    </div>
</div>
@endsection
