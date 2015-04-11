<?php

class ParticipantsController extends \BaseController {

	/**
	 * Participants
	 *
	 * @return Response
	 */
	public function index()
	{
		$participants = User::paginate(20);
		return View::make('backend.participants')->with(compact('participants'));
	}

	public function search()
	{
		$search = Input::get('search');
		if(empty($search) || $search > 30){
			return Redirect::route('backend.participants');
		}

		$participants = User::where('name', 'like', "%$search%")->orWhere('link', 'like', "%$search%")->orWhere('role', 'like', "%$search%")->paginate(20);
		return View::make('backend.participants')->with(compact('participants'));
	}


}