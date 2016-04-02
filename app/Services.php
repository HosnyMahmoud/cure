<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model {

	//
	protected $table = 'services';
	protected $fillable = ['name_ar','name_en','desc_ar','desc_en','image'];
	public static $rules = [
		'name_ar.required'=>'يجب ادخال العنوان بالعربية',
		'name_en.required'=>'يجب ادخال العنوان بالانجليزية',
		'desc_ar.required'=>'يجب ادخال النص بالعربية',
		'desc_en.required'=>'يجب ادخال النص بالانجليزية',
		'image.required'=>'يجب ادخال الصورة'
	];

}
