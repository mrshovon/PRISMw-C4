<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserInfoModel;

class User extends BaseController
{
    public function index()
    {
        $model = new UserInfoModel();
        $data['userlist'] = $model->get();
        $data = array_merge($this->global, $data);
        return view('admin/user', $data);
    }

    public function add()
    { 
        return view('admin/userAddEdit',$this->global);
    }

    public function delete($email)
   { 
        $session = session();    
        $model = new UserInfoModel();
        $result = $model->erase($email);
        if($result == null) {
            return redirect()->to('public/admin/user');
        }
        else {
            $session->setFlashdata('msg', $result);
            $data['userlist'] = $model->get(null);
            $data = array_merge($this->global, $data);
            return view('admin/user', $data);
        }
   }

    public function edit($email)
    { 
        $model = new UserInfoModel();
        $data['item'] = $model->getByCriteria($email);
        $data = array_merge($this->global, $data); 
        return view('admin/userAddEdit', $data);
    }

    public function create()
    {
        $session = session();
        $model = new UserInfoModel();
        $data = [];
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
        if($this->validate($rules)) {
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'phone'    => $this->request->getVar('phone'),
                'user_type'    => $this->request->getVar('user_type'),
                'title'    => $this->request->getVar('title'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $actiontype = $this->request->getVar('actiontype');
            if($actiontype == 'update' ){
                $result = $model->edit($data);
            }
            else {
                $result = $model->add($data);
            }
            if($result <= 0) {
                $session->setFlashdata('msg', 'User saved failed. Please try again later!');
                $data = array_merge($this->global, $data);
                return view('public/admin/userAddEdit', $data);
            }
            else {
                $session->setFlashdata('msg', 'User save Successful. Thank you!');
                return redirect()->to('public/admin/user');
            }  
        }
        else {
            $data['validation'] = $this->validator;
            $data['item'] = $model->getByCriteria($this->request->getVar('email'));
            $data = array_merge($this->global, $data);
            return view('admin/userAddEdit', $data); 
        }
    }
}