<?php

use Illuminate\Auth\UserTrait;
use Zizaco\Confide\ConfideUser;
use Illuminate\Auth\UserInterface;
use Zizaco\Confide\ConfideUserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface, ConfideUserInterface {

	use UserTrait, RemindableTrait, ConfideUser;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
