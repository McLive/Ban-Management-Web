<?php

class UserController extends BaseController {

	function showProfile($name)
	{
		if (is_null($name))
		{
			Redirect::to('/');
		}
		
		return View::make('site/user', array('username' => $name));
	}

}