<?php namespace App\Libraries;
use App\Models\UserModel;

class Members
{
    
    public function login()
	{
		$model = new UserModel();
		$check_account = $model->check($this->request->getVar('email'), $this->request->getVar('password'));
		if(!$check_account) {
			return redirect()->to('/');
		} else {
			$session = session();
			$session->set($check_account);
			return redirect()->to('/admin/dashboard');
		}
	}

	public function isadmin() {
		$session = session();
		if($session->get('admin')) {
			return $session;
		} else {
			return false;
		}
	}

	public function removeuser($id) {
		$model = new UserModel();

		$model->where('id', $id);
		$model->delete();

		return redirect()->to('/admin/userlist');
	}

	public function userlist() {
		$isadmin = $this->isadmin();
        if($isadmin) {
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
		if($opt == 1) {
			$model = new UserModel();

			$email = $this->request->getVar('email');
			$password = $this->request->getVar('password');

			$model->adduser($email, $password);

			return redirect()->to('/admin/userlist');
		} else {
			echo view('admin/header');
			echo view('admin/adduser');
			echo view('admin/footer');
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
	//--------------------------------------------------------------------


}