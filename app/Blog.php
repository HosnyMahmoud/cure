<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

	protected $table = 'blog';
	protected $fillable = ['title_ar','title_en','image','content_ar','content_en','tags_ar','tags_en'];
	public static $rules = [
		'title_ar.required' => 'العنوان بالعربية مطلوب',
		'title_ar.min' => 'العنوان بالعربية يجب ان لا يقل عن 5 احرف',
		'title_en.required' => 'العنوان بالانجليزية مطلوب',
		'title_en.min' => 'العنوان بالانجليزية يحب ان لا يقل عن 5 احرف',
		'image.required' =>'يجب ادخال الصورة',
		'image.image' =>'الملف يجب ان يكون صورة',
		'content_ar.required' =>'يجب ادخال المحتوى بالعربية',
		'content_en.required' =>'يجب ادخال المحتوى بالانجليزية',
		'tags_ar.required' =>'يجب ادخال الكلمات الدلالية بالعربية',
		'tags_en.required' =>'يجب ادخال الكلمات الدلالية بالانجليزية',
	];
}

