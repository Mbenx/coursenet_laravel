<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// jika akan menggunakan sofdeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class Jabatan extends Model
{
    // whitelist
    protected $fillable = ['nama_jabatan']; 
    // blacklist
    protected $guarded = ['id'];

    // created_at & updated_at tidak terpakai 
    // public $timestamps = false;

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
