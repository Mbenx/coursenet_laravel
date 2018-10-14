<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventori extends Model
{
    // whitelist
    protected $fillable = ['nama_inventori']; 
    // blacklist
    protected $guarded = ['id'];
    // created_at & updated_at tidak terpakai 
    public $timestamps = false;
}
