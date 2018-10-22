<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventori extends Model
{
    // whitelist
    protected $fillable = ['inventori_name']; 
    // blacklist
    protected $guarded = ['id'];

    public function archive(){
        return $this->belongsTo('App\Archive');
    }

    public function employee(){
        return $this->belongsToMany('App\Employee');
    }
}
