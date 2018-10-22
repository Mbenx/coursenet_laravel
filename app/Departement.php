<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    // whitelist
    protected $fillable = ['departement_name']; 
    // blacklist
    protected $guarded = ['id'];
    // created_at & updated_at tidak terpakai 
    //public $timestamps = false;
    
    public function position() {
        return $this->hasMany('App\Position');
    }
    
}
