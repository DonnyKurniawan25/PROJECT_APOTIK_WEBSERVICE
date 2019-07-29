<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\penjualan;
use App\Model\detail;
use App\Model\karyawan;
use App\Model\produks;
use DB;

class penjualanController extends Controller
{
   
    public function index()
    {
        $data = penjualan::all();
        return view('penjualan.index',compact('data'));
    }

    public function create()
    {
        $karyawan = karyawan::all();
        return view('penjualan.create',compact('karyawan'));
        
    }
    
    public function store(Request $request)
    {
        $data = penjualan::create([
            'nama_pembeli' => $request->namapembeli,
            'karyawan_id' => $request->idkaryawan,
            'tanggal' => $request->tanggal,

        ]);

        return redirect()->route('penjualan.show',['id' => $data->id]);
    }


    public function show($id)
    {
        $data = penjualan::findOrFail($id);
        $barang = produks::all();
        return view('penjualan.show',compact('data','barang'));
    }
    
    public function edit($id)
    {
         $jual = penjualan::where('id',$id)->first();
         $karyawan = karyawan::all();
         return view('penjualan.edit',compact('jual','karyawan'));
    }

    public function update(Request $request, $id)
    {
        penjualan::where('id',$id)->update([
            'nama_pembeli' => $request->namapembeli,
            'tanggal' => $request->tanggal,

        ]);

        return redirect()->route('penjualan.index');
    }

    public function destroy($id)
    {
        penjualan::where('id',$id)->delete();
        return redirect()->route('penjualan.index');
    }
}
