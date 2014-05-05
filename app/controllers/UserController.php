<?php
class HomeController extends BaseController {
/**
 * -------------------------------
 *  User Controller
 * -------------------------------
 * @copyright 2014 Joaquín Díaz <joaquin.diaz@ies.cl>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

	public function getLogin(){
		Return View::make('login');
	}

	public function postLogin(){
		$inputs = Input::all();
		$email    = $inputs['email'];
		$password = $inputs['password'];

		if (Auth::attempt(array('email' => $email, 'password' => $password))){
		    return Redirect::intended('dashboard');
		} else {
			return Redirect::to('login');
		}
	}

}
