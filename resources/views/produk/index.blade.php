@extends('layout.app')

@section('content')  

<div class="row">
    <div class="col-md-10" style="margin-left: 110px;margin-top: 70px" >             
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <a href="{{ route('produk.create') }}"><button class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"> Tambah Produk</i></button></a>
    <hr>
    <thead>
    <tr class="table-primary" style="background: #4ECDC4; color: white">
        <th>ID</th>
        <th>Nama </th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Jenis Obat</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php 
            $no = 1;
        ?>
        @foreach($data as $v)
        <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->nama }}</td>
            <td>{{ $v->qty }}</td>
            <td>{{ $v->harga }}</td>
            <td>{{ $v->jenis->nama_obat}}</td>

            <td>
                 <form method="post" action="{{ route('produk.destroy',$v->id) }}">
                    <a href="{{ route('produk.edit',$v->id) }}" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
                    {{ csrf_field() }}
                    
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();"><span class="fa fa-trash-o"></button> 
                </form>   
            </td>             
        </tr> 
        <?php $no++; ?>    
        @endforeach 
    
    </tbody>
</table>
</div>
</div>
@endsection