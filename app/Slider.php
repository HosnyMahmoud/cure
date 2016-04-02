<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {

	protected $table = 'sliders';
	protected $fillable = ['background','head_ar','head_en','text_ar','text_en'];

}
