<?php namespace App\Controllers;

use App\Models\User as UserModel;

class Login extends BaseController
{

	protected $helpers = ['form', 'session'];
	
	public function index()
	{
		return view('security/Login');
	}

	public function auth()
	{	
 		if (! $this->validate([
			'username' => 'required',
			'password' => 'required',
		]))
		{
			return Login::authFailed();
		}

		$userModel = new UserModel();

		$username =  $this->request->getVar('username');
		$password =  $this->request->getVar('password');
		
		$user = $userModel->getByUsername($username);
		if(empty($user)){
			return Login::authFailed(); 
		}
		  
		$userPassword = Login::convertDecrypt($user['password']);
		if($password != $userPassword){
			return Login::authFailed(); 
		}

		//set session
		return Dashboard::index();
  
	}

	public function convertDecrypt($resource){
		$encrypter = \Config\Services::encrypter();
		return $encrypter->decrypt(base64_decode($resource));
	}

	public function authFailed(){
		$session = session();
		$session->setFlashdata('failed', 'The Username or Password is Incorrect!');	
		return Login::index();
	}

	
 

} 