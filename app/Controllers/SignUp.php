<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\UserInfoModel;



class SignUp extends BaseController
{
    public function index()
    {
        
    }

    public function create()
    {
        $session = session();
        $data = [];
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tbl_user_info.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $model = new UserInfoModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'phone'    => $this->request->getVar('phone'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $result=$model->add($data);
            if($result<=0){
                $session->setFlashdata('msg', 'User Creation failed. Please try again later!');
                return view('prism/signup', $data);
            }
            else{
                $session->setFlashdata('msg', 'User Created Successfully. Thank you!');
                return redirect()->to('public/login');
            }  
        }
        else{
            $data['validation'] = $this->validator;
            return view('prism/signup', $data); 
        }
    }
}
