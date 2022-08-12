<?php

namespace App\Controllers;

class Donghu extends BaseController
{
	public function index($num=null)
	{
        if(!$num) {
            return redirect()->to('/stages');
        } else {
            echo view('template/header.php');
            echo view('stages/header.php');
            echo view('donghu/'.$num.'.php');
            echo view('template/footer.php');
        }
	}

}
