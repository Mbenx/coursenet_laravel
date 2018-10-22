<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Position extends Model
{
    // whitelist
    protected $fillable = ['nama_jabatan']; 
    // blacklist
    protected $guarded = ['id'];

    // created_at & updated_at tidak terpakai 
    // public $timestamps = false;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function departement() {
        return $this->belongsTo('App\Departement');
    }

    public function employee() {
        return $this->hasMany('App\Employee');
    }
}
