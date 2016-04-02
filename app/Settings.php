<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

	protected $table = 'settings';
	protected $fillable = ['siteName_ar','siteName_en','siteDisc_ar','siteDisc_en','tags_ar','tags_en','logo','phone','mobile','fax','email','address_ar','address_en','facebook','twitter','skype','google_plus','youtube','instagram','linkedin','pinterest'];

	public static $rules =[
		'siteName_ar.required'=>'اسم الموقع بالعربية مطلوب',
		'siteName_en.required'=>'اسم الموقع بالانجليزية مطلوب',
		'siteDisc_ar.required'=>'وصف الموقع بالعربية مطلوب',
		'siteDisc_en.required'=>'وصف الموقع بالانجليزية مطلوب',
		'tags_ar.required'=>'الكلمات الدلالية بالعربية مطلوبة',
		'tags_en.required'=>'الكلمات الدلالية بالانجليزية مطلوبة',
		'phone.required'=>'التليفون  مطلوب',
		'mobile.required'=>'الموبايل مطلوب',
		'fax.required'=>'الفاكس بالعربية مطلوب',
		'email.required'=>'البريد الالكترونى بالعربية مطلوب',
		'address_ar.required'=>'العنوان  بالعربية مطلوب',
		'address_en.required'=>'العنوان بالانجليزية مطلوب',
	];
}
