<?php

namespace App\Controllers;

class Ar extends BaseController
{
	public function index($num=null)
	{
		echo view('ar/'.$num.'.php');
	}
}
