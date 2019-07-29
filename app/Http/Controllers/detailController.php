<?php

namespace App\Http\Controllers;

use App\Model\detail;
use Illuminate\Http\Request;
use DB;

class detailCOntroller extends Controller
{

    public function index()
    {
        $data = detail::all();
        return view('detail.index',compact('data'));
    }

    public function create()
    {
    
    }

    public function store(Request $request)
    {
        $data = detail::create([
            'penjualan_id'=>$request->idpenjualan,
            'produk_id'=>$request->idproduk,
            'karyawan_id'=>$request->idkaryawan,
            'jumlah'=>$request->jumlah,
        ]);

        return redirect()->route('penjualan.show', ['id' => $data->penjualan_id]);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        detail::where('id',$id)->delete();
        return redirect()->route('detail.index');
    }
}
