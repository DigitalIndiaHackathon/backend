<?php

class BaseController extends Controller {

	/**
	 * The Current looged in user
	 * @var User
	 */
	protected $currentUser;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}

		//Set the current logged in user
		//to be used by across all the
		//extending controllers
		$this->currentUser = Auth::user();

		//Share the currentUser variable across all the views
		View::share('currentUser', $this->currentUser);
	}

}
