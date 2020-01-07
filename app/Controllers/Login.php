<?php namespace App\Controllers;

class Login extends BaseController
{

	public function index()
	{
		return view('security/Login');
	}

	public function auth()
	{
		helper('form');

		if (! $this->validate([
				  'username' => 'required',
				  'password' => 'required',
			  ]))
		{
			return view('security/Login');
		}

		// $username =  $this->request->getVar('username');
		// $password =  $this->request->getVar('password');

}

} 