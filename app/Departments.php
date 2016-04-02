<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model {

	protected $table = 'departments';
	protected $fillable = ['name_en','name_ar'];




}
