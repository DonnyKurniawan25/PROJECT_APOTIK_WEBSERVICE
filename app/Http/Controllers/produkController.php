<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\produks;
use App\Model\jenis;


class produkController extends Controller
{

    public function index()
    {
        $data = produks::all();
        return view("produk.index", compact('data'));

    }

    public function create()
    {
        $jenis = jenis::all();
        return view('produk.create', compact('jenis'));

    }

    public function store(Request $request)
    {
        produks::create([
            'nama' => $request->nama,
            'qty' => $request->qty,
            'id_jenis' => $request->idkategori,
            'harga' => $request->harga,

        ]);

        return redirect()->route('produk.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
         $jenis = jenis::all();
         $editproduk = produks::where('id',$id)->first();
         return view('produk.edit',compact('editproduk','jenis'));

    }


    public function update(Request $request, $id)
    {
       produks::where('id',$id)->update([
            'nama' => $request->nama,
            'qty' => $request->qty,
            'id_jenis' => $request->idkategori,
            'harga' => $request->harga,
        ]);

        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        produks::where('id',$id)->delete();
        return redirect()->route('produk.index');
    }
}
