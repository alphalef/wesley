<?php namespace App\Controllers;
use App\Models\PageModel;
use App\Models\UserModel;
use App\Models\DonationModel;

class User extends BaseController
{
	public function index()
	{
		$session = session();

		if(!$session->get('userid')) {
			return redirect()->to('/');
		}
		
		echo view('admin/header');
		echo view('admin/dashboard');
		echo view('admin/footer');       
	}

    public function signup($opt = null)
	{
		$model = new UserModel();
				
        if(!$opt) {
            echo view('template/header');
            echo view('user/signup');
            echo view('template/footer'); 
        } elseif($opt == 'adduser') {

			$email = $this->request->getVar('email');
			$name = $this->request->getVar('name');
			$userid = $this->request->getVar('userid');
			$password = $this->request->getVar('password');

			if(!$name || !$userid || !$password) {
				return redirect()->to('/user/login');
			}

			if($model->isexist('email', $email)) {
				echo "<script>alert('이미 가입된 이메일입니다'); history.go(-1)</script>";
			} elseif ($model->isexist('userid', $userid)) {
				echo "<script>alert('이미 가입된 아이디입니다'); history.go(-1)</script>";
			} else {
				$model->adduser($email, $password, $name, $userid);
				echo "<script>alert('성공적으로 가입되었습니다! 로그인 페이지로 이동합니다'); location.href='/user/login';</script>";
			}
        } elseif($opt == 'edit') {
			$session = session();
			$user = $model->getuser($session->get('userid'));

			$data = [
				'email' => $user['email'],
				'name' => $user['name'],
				'userid' => $user['userid']
			];

			echo view('template/header');
            echo view('user/signup', $data);
            echo view('template/footer'); 			
		} elseif($opt == 'doedit') {
			$session = session();
			$user = $model->getuser($session->get('userid'));

			if($user['userid'] == $this->request->getVar('userid')) {
				$data = [
					'email' => $this->request->getVar('email'),
					'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
					'name' => $this->request->getVar('name'),
				];

				$model->update($user['id'], $data);
			}
			
			return redirect()->to('/faithlife/index/'.date('Ymd'));
		}
	}

	public function login($opt=null)
	{
		$session = session();

		if($session->get('userid')) {
			echo "<script>location.href='/adm';</script>";
		}

		if(!$opt) {
			echo view('template/header');
			echo view('user/login');
			echo view('template/footer');

		} elseif($opt == '1') {
			$model = new UserModel();

			$check_account = $model->check($this->request->getVar('user'), $this->request->getVar('password'));
			$url = $this->request->getVar('url');
			
			if(!$check_account) {
				$data=[
					'msg'=>"아이디나 패스워드를 잘못 입력하셨습니다!"
				];

				echo view('template/header');
				echo view('user/login', $data);
				echo view('template/footer');
			} else {
				$session->set($check_account);

				echo "<script>location.href='/adm';</script>";
				
			}
		}
	}

	public function removeuser() {

		if($this->request->getVar('remove_confirm')) {

			$session = session();
			$model = new UserModel();
			$user = $model->getuser($session->get('userid'));
			$id = $user['id'];
			$model->where('id', $id);
			$model->delete();
			$session->destroy();

			echo "<script>alert('정상적으로 계정이 삭제되었습니다.'); location.href='/';</script>";
		} else {
			echo "<script>alert('탈퇴를 하시려면 확인란에 체크를 하셔야 합니다'); location.href='/user/signup/edit';</script>";
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

	public function adduser($opt = null) {
		$isadmin = $this->isadmin();
        if($isadmin) {
			if($opt == 1) {
				$model = new UserModel();

				$email = $this->request->getVar('email');
				$password = $this->request->getVar('password');

				$model->adduser($email, $password, $opt);

				return redirect()->to('/adm/userlist');
			} else {
				echo view('admin/header');
				echo view('admin/adduser');
				echo view('admin/footer');
			}
		} else {
			return redirect()->to('/');
		}
	}

	public function logout()
    {
		$session = session();
		$session->destroy();
		return redirect()->to('/');
    }	
}
