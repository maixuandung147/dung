<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $table ='articles';
    protected $fillable = ['name','description','content','category_id'];
    public function categories(){
    	return $this->belongsTo('App\categories','category_id','id');
    }
    public $timestamps = false;
}
