<?php

namespace App\Http\Controllers;

use App\Model\jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jenisController extends Controller
{

    public function index()
    {
        $data = jenis::all();
        return view("jenis.index",compact('data'));

    }

    public function create()
    {
        return view("jenis.create");
    }

    public function store(Request $request)
    {
        jenis::create([
            'nama_obat'=>$request->namaobat,
        ]);
        return redirect()->route('jenis.index');

    }

    public function show($id)
    {
        return 'show';
    }

    public function edit($id)
    {
        $jenis= jenis::where('id',$id)->first();
        return view("jenis.edit",compact('jenis'));
    }

    public function update(Request $request, $id)
    {
        jenis::where('id',$id)->update([
                'nama_obat'=>$request->namaobat
            ]
        );
        return redirect()->route("jenis.index");
    }

    public function destroy($id)
    {
        jenis::destroy($id);
        return redirect()->route("jenis.index");
    }
}
