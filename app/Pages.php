<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model {
	
	protected $table = 'pages';
	protected $fillable = ['title_ar','title_en','content_ar','content_en','ct_id'];

}
