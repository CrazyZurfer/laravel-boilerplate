<?php
class HomeController extends BaseController {
/**
 * -------------------------------
 *  User Controller
 * -------------------------------
 * @copyright 2014 Joaquín Díaz <joaquin.diaz@ies.cl>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

	public function showWelcome()
	{
		return View::make('hello');
	}

}
