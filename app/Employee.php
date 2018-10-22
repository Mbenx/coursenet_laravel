<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    // whitelist
    protected $fillable = ['identity_number','employee_name','address','e-mail','phone','picture','position_id']; 
    // blacklist
    protected $guarded = ['id']; 
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function inventori(){
        return $this->belongsToMany('App\Inventori');
    }

    public function position(){
        return $this->belongsTo('App\Position');
    }
}
