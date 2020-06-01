<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table ='category';
    protected $fillable = ['name'];	// làm ở model khai báo 3 cái này đe mình làm ở FACTORY
    public function product(){
    	return $this->hasMany('App\Product','category_id','id');
    }
    public $timestamps = false;
}
