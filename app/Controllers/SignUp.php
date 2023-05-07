<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\UserInfoModel;



class SignUp extends BaseController
{
    public function index()
    {
        return view('prism/signup');
    }

    public function create()
    {
        $session = session();
        $signup_type = $this->request->getVar('signup_type');
        $data = [];
        if($signup_type == 'email')
        {
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
                    'user_type'    => 'Customer',
                    'title'    => $this->request->getVar('title'),
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
       else{
        $rules = [
            'phone'          => 'required|min_length[10]|max_length[10]'
            ];
         if($this->validate($rules)){
            $model = new UserInfoModel();
            $data = [
                'phone'    => '0'.$this->request->getVar('phone'),
                'user_type'    => 'Customer',
                'name'     =>'0'.$this->request->getVar('phone'),
                'email'    =>'0'.$this->request->getVar('phone'),
                'title'    =>'',
                'password' =>''
            ];
            // echo '<pre>'; print_r($data); echo '</pre>';
            $result=$model->add($data);
            // echo $result; exit;
            // echo '<pre>'; print_r($result); echo '</pre>'; exit;
            if($result<=0){
                $session->setFlashdata('msg', 'Phone Number Already exists!!!');
                return view('prism/signup', $data);
            }
            else{
                $session->setFlashdata('msg', 'User Created Successfully. Thank you!');
                return redirect()->to('public/login');
            }  
        }
        else{
            $data['validation'] = $this->validator;
            $session->setFlashdata('msg', 'Phone number not excepted please check if the number is correct or write number without the country code "+880"');
            return view('prism/signup', $data); 
        }
       }
    }
}
