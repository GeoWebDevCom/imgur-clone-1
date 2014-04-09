<?php

class RegistrationController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('forms.registration');
	}

	/**
	* Create user action
	*/
	public function createUser() {
		/**
		* Populate data array
		*/
		$data = array(
			"username" => Input::get("username"),
			"email" => Input::get("email"),
			"redirect" => url("/")
		);

		/**
		* Create new user from user model
		*/
		$user = new User;
	
		$user->username = Input::get("username");
		$user->password = Hash::make(Input::get("password"));		
		$user->save();

		
		/**
		* Return the success view
		*/
		return View::make("templates.success", $data);
	}



}
