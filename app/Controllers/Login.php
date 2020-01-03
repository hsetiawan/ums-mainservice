<?php namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    { 
         $data['siteTitle'] = $_ENV['siteName'];
        return view('security/Login', $data);
    }


    
}