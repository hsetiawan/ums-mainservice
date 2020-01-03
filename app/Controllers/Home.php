<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['siteTitle'] = $siteName;
		return view('security/Login', $data);
	}

	//--------------------------------------------------------------------

}
