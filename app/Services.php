<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model {

	//
	protected $table = 'services';
	protected $fillable = ['name_ar','name_en','desc_ar','desc_en','image'];


}
