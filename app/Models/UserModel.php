<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['email', 'password', 'name', 'userid', 'usergroup'];

    public function isexist($category, $val)
    {
        $data = $this->asArray()
                    ->where([$category => $val])
                    ->first();

        if($data) {
            return true;
        } else {
            return false;
        }
    }
    
    public function check($user, $password)
    {
        if(strpos($user, '@')) {
            $data = $this->asArray()
                    ->where(['email' => $user])
                    ->first();
        } else {
            $data = $this->asArray()
                    ->where(['userid' => $user])
                    ->first();
        }

        if(!$data) {
            return false;
        } else {
            if (password_verify($password, $data['password'])) {
                $result = [
                    "userid"=>$data['userid'],
                    "name"=>$data['name'],
                    "usergroup"=>$data['usergroup']
                ];
                return $result;
            } else {
                return false;
            }
        }
    }

    public function adduser($email, $password, $name, $userid)
    {
        $hashedpsw = password_hash($password, PASSWORD_DEFAULT);

        $this->save([
            'email' => $email,
            'password' => $hashedpsw,
            'usergroup' => 0,
            'userid' => $userid,
            'name' => $name
        ]);
    }

    public function getuser($userid)
    {
        $data = $this->asArray()
                    ->where(['userid' => $userid])
                    ->first();
        return $data;
    }

    public function userlist()
    {
        return $this->orderBy('id', 'desc')->findall();
    }

    public function getusergroup($userid)
    {
        $data = $this->asArray()
                    ->where(['userid' => $userid])
                    ->first();
        return $data['usergroup'];
    }

}