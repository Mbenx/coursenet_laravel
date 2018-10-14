<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    // whitelist
    protected $fillable = ['nama_arsip']; 
    // blacklist
    protected $guarded = ['id'];
    // created_at & updated_at tidak terpakai 
    public $timestamps = false;
}
