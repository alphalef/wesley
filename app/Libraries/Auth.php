<?php namespace App\Libraries;
use App\Models\UserModel;


class Auth
{
    
	public function isadmin() {
		$session = session();
		if($session->get('usergroup') == 'admin' || $session->get('usergroup') == 'subadmin') {
			return $session->get('usergroup');
		} else {
			return false;
		}
	}

}