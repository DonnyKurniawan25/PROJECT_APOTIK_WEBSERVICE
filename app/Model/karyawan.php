<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $guarded = ['id'];
    public $table = 'karyawan';

 	public function penjualan()
	{
    	return $this->hasMany('App\Model\penjualan','karyawan_id');
	}

}