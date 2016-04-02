<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model {

	//
	protected $table = "clinics";
	protected $fillable = ['title_ar','title_en','img'];

	public static $rules = [
		'title_ar.required'=>'الاسم بالعربية مطلوب',
		'title_en.required'=>'الاسم بالانجليزية مطلوب',
		'img.required'=>'يجب ادخال الصورة',
	];
	public static $rule = [
		'title_ar.required'=>'الاسم بالعربية مطلوب',
		'title_en.required'=>'الاسم بالانجليزية مطلوب',
	];

}
