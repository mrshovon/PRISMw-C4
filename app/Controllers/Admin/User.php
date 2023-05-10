<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserInfoModel;
use App\Models\PropertyInfoModel;

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
        $model = new PropertyInfoModel();
        $data['divisionlist'] = $model->getByCriteria(10);
        $data = array_merge($this->global, $data);
        return view('admin/userAddEdit',$data);
    }

    public function delete($email)
   { 
        $session = session();    
        $model = new UserInfoModel();
        $model2 = new PropertyInfoModel();
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
        $model2 = new PropertyInfoModel();
        $data['item'] = $model->getByCriteria($email);
        $data['divisionlist'] = $model2->getByCriteria(10);
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
            // 'password'      => 'required|min_length[6]|max_length[200]',
            // 'confpassword'  => 'matches[password]'
        ];
        if($this->validate($rules)) {
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'phone'    => $this->request->getVar('phone'),
                'user_type'    => $this->request->getVar('user_type'),
                'title'    => $this->request->getVar('title'),
                'nid'    => $this->request->getVar('nid'),
                'address'    => $this->request->getVar('address'),
                'dob'    => $this->request->getVar('dob'),
                'gender'    => $this->request->getVar('gender'),
                'occupation'    => $this->request->getVar('occupation'),
                'division'    => $this->request->getVar('division'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $actiontype = $this->request->getVar('actiontype');
            // echo '<pre>'; print_r($data); echo '</pre>'; exit;
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
            $data['divisionlist'] = $model2->getByCriteria(10);
            $data = array_merge($this->global, $data);
            return view('admin/userAddEdit', $data); 
        }
    }
}