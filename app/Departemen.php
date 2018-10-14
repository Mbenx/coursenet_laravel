<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    // whitelist
    protected $fillable = ['nama_departemen']; 
    // blacklist
    protected $guarded = ['id'];
    // created_at & updated_at tidak terpakai 
    public $timestamps = false; 
    
}
