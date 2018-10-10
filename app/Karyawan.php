<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public $timestamps = false; // created_at updated_at tidak terpakai

    protected $fillable = ['nama_karyawan','telp'];
    
}
