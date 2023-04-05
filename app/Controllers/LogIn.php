<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\UserInfoModel;



class Login extends BaseController
{
    public function index()
    {
        return view('prism/login');
    }

    public function signin()
    {
        $session = session();
        $model = new UserInfoModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->IsExist($email);

        if($data){
            $password;
             $pass = $data['password'];
             $verify_pass = password_verify($password, $pass);
            
            if($verify_pass){
                $ses_data = [
                    // 'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/public/home/userdash');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/public/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/public/login');
        }

    }
}