<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

	protected $table = 'settings';
	protected $fillable = ['siteName_ar','siteName_en','siteDisc_ar','siteDisc_en','tags_ar','tags_en','logo','phone','mobile','fax','email','address_ar','address_en','facebook','twitter','skype','google_plus','youtube','instagram','linkedin','pinterest'];
}
