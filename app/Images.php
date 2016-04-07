<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {

	//
	protected $table    = 'images';
	protected $fillable = ['name_ar','name_en','img'];
	public static $rules = [
		'name_ar.required'=>'يجب ادخال العنوان بالعربية',
		'name_en.required'=>'يجب ادخال العنوان بالانجليزية',
		'img.required'=>'يجب ادخال الصورة'
	];
}
