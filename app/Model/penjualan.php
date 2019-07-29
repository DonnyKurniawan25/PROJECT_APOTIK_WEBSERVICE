<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $guarded = ['id'];
    public $table = 'penjualan';

    public function karyawan()
    {
      return $this->belongsTo(karyawan::class);
    }
    public function detail()
    {
        return $this->hasMany(detail::class, 'penjualan_id');
    }
}
