<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archive extends Model
{
    // whitelist
    protected $fillable = ['archives_name']; 
    // blacklist
    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function inventori(){
        return $this->hasOne('App\Inventori');
    }
}
