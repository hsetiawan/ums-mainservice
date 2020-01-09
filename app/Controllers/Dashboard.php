<?php namespace App\Controllers;

class Dashboard extends BaseController{

    public function index(){
        echo view('dashboard/Header');
        echo view('dashboard/Menu');
        echo view('dashboard/Dashboard');
        echo view('dashboard/Footer');
    }

}