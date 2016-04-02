<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model {

	//
	protected $table = 'videos';
	protected $fillable = ['name_ar','name_en','videos','link','img','type'];

}
