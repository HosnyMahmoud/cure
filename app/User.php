<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['firstname','lastname','email','password','phone','mac_address'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public static $rules =[
		'firstname.required'=>'الاسم الاول مطلوب',
		'firstname.unique'=>' الاسم الاول مستخدم من قبل',
		'lastname.required'=>'الاسم الاخير مطلوب',
		'lastname.unique'=>'الاسم الاخير مستخدم من قبل',
		'password.required'=>'كلمة المرور',
		'phone.required'=>'رقم الهاتف مطلوب',
		'email.required'=>'البريد الالكترونى مطلوب',
		'email.email'=>'يجب ادخال البريد الالكترونى بطريقة صحيحة',
	];
	public static $rule =[
		'firstname.required'=>'الاسم الاول مطلوب',
		'firstname.unique'=>' الاسم الاول مستخدم من قبل',
		'lastname.required'=>'الاسم الاخير مطلوب',
		'lastname.unique'=>'الاسم الاخير مستخدم من قبل',
		'phone.required'=>'رقم الهاتف مطلوب',
		'email.required'=>'البريد الالكترونى مطلوب',
		'email.email'=>'يجب ادخال البريد الالكترونى بطريقة صحيحة',
	];

}
