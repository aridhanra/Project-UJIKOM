<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    //
    protected $table = 'golongans';
    protected $fillable = array('kode_golongan','nama_golongan','besaran_uang','created_at','updated_at');
    protected $visible = array('kode_golongan','nama_golongan','besaran_uang','created_at','updated_at');
    
    public function pegawai()
    {
    	return $this->hasMany('App\Pegawai','golongan_id');
    }
    public function kategori_lembur()
    {
    	return $this->hasMany('App\Kategori_lembur','golongan_id');
    }
    public function tunjangan()
    {
    	return $this->hasMany('App\Tunjangan','golongan_id');
    }
}
