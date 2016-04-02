<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {

	protected $table = 'sliders';
	protected $fillable = ['background','head_ar','head_en','text_ar','text_en'];

	public static $rules = [
		'background.required'=>'يجب ادخال الصورة',
		'head_ar.required'=>'يجب ادخال العنوان بالعربية',
		'head_en.required'=>'يجب ادخال العنوان بالانجليزية',
		'text_ar.required'=>'يجب ادخال النص بالعربية',
		'text_en.required'=>'يجب ادخال النص بالانجليزية'
	];

}
