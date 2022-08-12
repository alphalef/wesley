<?php

namespace App\Controllers;

class Stages extends BaseController
{
	public function index($num=null)
	{
		if(!$num) {
			echo view('template/header.php');
			echo view('stages/menu.php');
			echo view('template/footer.php');
		} else if($num == '4-3') {
			echo view('stages/'.$num.'.php');
		} else {
			echo view('template/header.php');
			echo view('stages/header.php');
			echo view('stages/'.$num.'.php');
			echo view('template/footer.php');
		}
	}

}
