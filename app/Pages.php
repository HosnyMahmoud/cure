<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model {
	
	protected $table = 'pages';
	protected $fillable = ['title_ar','title_en','content_ar','content_en','ct_id'];
	public static $rules = [
		'title_ar.required'=>'يجب ادخال العنوان بالعربية',
		'title_en.required'=>'يجب ادخال العنوان بالانجليزية',
		'content_ar.required'=>'يجب ادخال المحتوى بالعربية',
		'content_en.required'=>'يجب ادخال المحتوى بالانجليزية'
	];
}
