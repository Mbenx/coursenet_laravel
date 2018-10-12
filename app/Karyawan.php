<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// jika akan menggunakan sofdeletes
// use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    // if table name not plural
    protected $table = 'karyawan';
    // whitelist
    protected $fillable = ['nama_karyawan','alamat','telp','jabatan']; 
    // blacklist
    protected $guarded = ['id'];
    // created_at & updated_at tidak terpakai 
    public $timestamps = false; 
    


    // use SoftDeletes;
    // protected $dates = ['deleted_at];
    
}
