<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model {

	protected $table = 'testimonials';
	protected $fillable = ['name_ar','name_en','text_ar','text_en'];
	public static $rules = [
		'name_ar.required'=>'يجب ادخال العنوان بالعربية',
		'name_en.required'=>'يجب ادخال العنوان بالانجليزية',
		'text_ar.required'=>'يجب ادخال النص بالعربية',
		'text_en.required'=>'يجب ادخال النص بالانجليزية ',
	];

}
