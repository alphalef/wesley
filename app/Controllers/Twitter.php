<?php

namespace App\Controllers;

class Twitter extends BaseController
{
	public function index($num=null)
	{
		echo view('template/twitter-header.php');
        echo view('twitter/'.$num.'.php');
        echo view('template/twitter-footer.php');
	}

}
