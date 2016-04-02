<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model {

	protected $table = 'abouts';
	protected $fillable = ['name_ar','name_en','content_ar','content_en'];
	public static $rules = [
		'name_ar.required'=>'يجب ادخال الاسم بالعربية',
		'name_en.required'=>'يجب ادخال الاسم بالانجليزية',
		'content_ar.required'=>'يجب ادخال المحتوى بالعربية',
		'content_en.required'=>'يجب ادخال المحتوى بالانجليزية'
	];

}
