<?php

class BackendController extends BaseController{

	public function index(){
		return View::make('backend.index');
	}

}