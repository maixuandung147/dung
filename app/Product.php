<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='product';
    protected $fillable = ['name','quantity','category_id'];
    public function categorie(){
    	return $this->belongsTo('App\Categorie','category_id','id');
    }
    public $timestamps = false;
}
