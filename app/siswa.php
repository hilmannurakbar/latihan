<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
      protected $table = 'siswas';
    protected $fillable = ['nama','orangtua_id','umur', 'alamat'];
    protected $visible = ['nama','orangtua_id','umur', 'alamat'];
    public $timestamps = true;
 
    public function orang_tua () 
    {
    	return $this->hasMany('App\orang_tua', 'orangtua_id');
    }
}


