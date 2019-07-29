<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $guarded = ['id'];
    public $table = 'penjualandetail';

    public function penjualan()
    {
      return $this->belongsTo(penjualan::class);
    }

    public function produk()
    {
        return $this->belongsTo(produks::class);
    }

    public function karyawan()
    {
        return $this->belongsTo(karyawan::class);

    }

}
