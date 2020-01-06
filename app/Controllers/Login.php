<?php namespace App\Controllers;

class Login extends BaseController
{

	public function index()
	{
		$data['siteTitle'] = 'UMS - Unified Monitoring Service';
		return view('security/Login', $data);
	}

	public function auth()
	{
	}

}
