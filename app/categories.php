<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table ='categories';
    protected $fillable = ['name'];	
    public function articles(){
    	return $this->hasMany('App\articles','category_id','id');
    }
    public $timestamps = false;
}
