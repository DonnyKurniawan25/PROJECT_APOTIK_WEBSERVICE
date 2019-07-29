<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
	protected $guarded = ['id'];
    public $table = 'produk';

    public function jenis()
    {
    	return $this->belongsTo('App\Model\jenis', 'id_jenis');
    }
}
