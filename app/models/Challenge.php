<?php

class Challenge extends Eloquent {

	protected $table = "challenges";

	protected $fillable = array('title', 'description', 'user_id');

	/**
	 * The User the Challenge belongs to
	 * @return User
	 */
	public function user(){
		return $this->belongsTo('User', 'user_id');
	}

}