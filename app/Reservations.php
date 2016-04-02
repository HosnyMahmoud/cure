<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model {

	protected $table 	= 'reservations';
	protected $fillable = ['patient_name','patient_phone','patient_email','department_id','user_id','reservation_date'];
	protected $dates 	= ['reservation_date'];
}
