<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "AdminLTE 3 | Register";
    	return view('pages/login', $data);
	}
}