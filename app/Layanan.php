<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
	public $table = "layanan";
    protected $fillable = array(
	'id',
	'kategpri',
	'namalayanan',
	'alamat',
	'notelpon',
	'lat',
	'longitude'

	

    	);
}
