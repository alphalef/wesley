<?php namespace App\Controllers;
use App\Models\PageModel;
use App\Models\UserModel;
use App\Models\PostModel;


class Adm extends BaseController
{
	public function index()
	{
		$session = session();

 		if(!$session->get('userid')) {
			return redirect()->to('/');
		}

		$model = new UserModel();
		$usergroup = $model->getusergroup(!$session->get('userid'));

		if($usergroup < 1) {
			return redirect()->to('/');
		}

		echo view('admin/header');
		echo view('admin/dashboard');
		echo view('admin/footer');
	}

	public function isadmin() {
		$session = session();
		if($session->get('usergroup') == 2) {
			return true;
		} else {
			return false;
		}
	}

	public function userlist() {
		$isadmin = $this->isadmin();
        if($isadmin == 'admin') {
			$model = new UserModel();
			$data = [
				'list' => $model->userlist()
			];

			echo view('admin/header');
			echo view('admin/userlist', $data);
			echo view('admin/footer');
		} else {
			return redirect()->to('/');
		}

	}

	public function logout()
    {
        $isadmin = $this->isadmin();
        if($isadmin) {
            $isadmin->destroy();
            return redirect()->to('/');
        } else {
            return redirect()->to('/');
        }
    }	

	public function mylist() {
		$session = session();
		$userid = $session->get('userid');

		$model = new PostModel();

		if(!isset($_GET['page_group1'])) {
			$returnPage = 0;
		} else {
			$returnPage = $_GET['page_group1'];
		}

		$posts = $model->getuserpost($userid); 
		$totalcount = $model->getuserpostcount($userid); 


		$data = [
			'totalcount'=>$totalcount,
			'countperpage'=>$model->posts_per_page,
			'returnPage'=>$returnPage,
		];
		
		$final_data = array_merge($data, $posts);

		echo view('admin/header');
		echo view('admin/post/list', $final_data);
		echo view('admin/footer');

	}
}
