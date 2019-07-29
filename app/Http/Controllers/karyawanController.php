<?php

namespace App\Http\Controllers;

use App\Model\karyawan;
use Illuminate\Http\Request;
use DB;

class karyawanController extends Controller
{
   
    public function index()
    {
        $data = karyawan::all();
        return view('karyawan.index', compact('data'));
    }

    public function create()
    {
        
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        karyawan::create([
            'nama_karyawan' => $request->namakaryawan,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,

        ]);

        return redirect()->route('karyawan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $karyawan = karyawan::where('id',$id)->first();
        return view('karyawan.edit',compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        karyawan::where('id',$id)->update([
            'nama_karyawan' => $request->namakaryawan,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,

        ]);
        return redirect()->route('karyawan.index');
    }

    public function destroy($id)
    {
        karyawan::where('id',$id)->delete();
        return redirect()->route('karyawan.index');
    }
}
