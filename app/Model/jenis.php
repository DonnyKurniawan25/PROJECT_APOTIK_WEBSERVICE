<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $guarded = ['id'];
    public $table = 'jenis_obat';

    public function produk() 
    {
    	return $this->hasMany('App\Model\produks', 'id_jenis');
    }
}
