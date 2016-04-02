<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model {

	protected $table = 'testimonials';
	protected $fillable = ['name_ar','name_en','text_ar','text_en'];


}
