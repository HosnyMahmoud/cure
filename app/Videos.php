<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model {

	//
	protected $table = 'videos';
	protected $fillable = ['name_ar','name_en','videos','link','img','type'];
	public static $rules = [
		'name_ar.required'=>'يجب ادخال العنوان بالعربية',
		'name_en.required'=>'يجب ادخال العنوان بالانجليزية',
		'img.required'=>'يجب ادخال الصورة',
		'videos.required'=>'يجب ادخال الفيديو',
		'link.required'=>'يجب ادخال الرابط'
	];
}
