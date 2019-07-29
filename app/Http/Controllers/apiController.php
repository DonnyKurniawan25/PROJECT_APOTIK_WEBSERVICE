<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\jenis;
use App\Model\produks;
use App\Model\pelanggan;
use App\Model\karyawan;
use App\Model\penjualan;
use App\Model\detail;

class apiController extends Controller
{
    public function getKaryawan()
    {
        $data = karyawan::with('penjualan')->get();
        return response()->json($data);
    }
     public function getProduks()
    {
        $data = produks::with('jenis')->get();
        return response()->json($data);
    }

    public function getPenjualan()
    {
        $data = penjualan::with('karyawan')->get();
        return response()->json($data);
    }
   public function getDetail()
   {
       $data = detail::with('produk','karyawan','penjualan')->get();
        return response()->json($data);
   }

    public function postDetail(Request $request)
    {
        
        $save = detail::create($request->all());
        if ($save) {
            $res = array(
                'status' => true,
                'message' => 'Detail berhasil di simpan'
            );
        }else{
            $res = array(
                'status' => false,
                'message' => 'gagal menyimpan'
            );

        }
        return response()->json($res);
    }   

     public function postPenjualan(Request $request)
    {
        
        $save = penjualan::create($request->all());
        if ($save) {
            $res = array(
                'status' => true,
                'message' => 'penjualan berhasil di simpan'
            );
        }else{
            $res = array(
                'status' => false,
                'message' => 'gagal menyimpan'
            );

        }
        return response()->json($res);
        
    }
    public function updateDetail($id, Request $request)
    {
        $save = detail::where('id', $id)
        ->update($request->all());
        if ($save) {
            $res = array(
                'status' => true,
                'message' => 'Detail berhasil di ubah'
            );
        }else{
            $res = array(
                'status' => false,
                'message' => 'gagal menyimpan'
            );
        }
        return response()->json($res);
    }

}

