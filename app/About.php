<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model {

	protected $table = 'abouts';
	protected $fillable = ['name_ar','name_en','content_ar','content_en'];


}
