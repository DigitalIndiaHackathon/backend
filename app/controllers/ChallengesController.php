<?php

class ChallengesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /challenges
	 *
	 * @return Response
	 */
	public function index(){
		$challenges = Challenge::all();
		return View::make('backend.challenge.index')->with(compact('challenges'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /challenges/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.challenge.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /challenges
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only(array('title', 'description','team'));
		$validator = Validator::make(
			$input,
			array(
				'title' => 'required|min:4',
				'description' => "required",
				'team' => "required|min:3"
				)
			);

		if($validator->fails()){
			return Redirect::route('backend.challenges.create')->withErrors($validator->messages());
		}

		$challenge = new Challenge;
		$challenge->title = $input['title'];
		$challenge->description = $input['description'];
		$challenge->team = $input['team'];
		$challenge->user_id = $this->currentUser->id;

		if($challenge->save()){
			return Redirect::route('backend.challenges.show', array($challenge->id));
		}
		return Redirect::route('backend.challenges.create')->withErrors(array("Something went wrong."));
	}

	/**
	 * Display the specified resource.
	 * GET /challenges/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$challenge = Challenge::findOrFail($id);

		return View::make('backend.challenge.show')->with(compact('challenge'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /challenges/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /challenges/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /challenges/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}