<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\UserInfoModel;



class Login extends BaseController
{
    public function index()
    {
        return view('prism/login');
    }

    public function phonesignin()
    {
        $session = session();
        $model = new UserInfoModel();
        $phone = '0'.$this->request->getVar('phone');
        $data = $model->IsExist(null,$phone);
        // echo '<pre>'; print_r($data); echo '</pre>';
        // echo '<pre>'; print_r($name); echo '</pre>'; exit;
        if($data){
            if(empty($data['email'])){
                $name = $data['phone'];
            }
            else{
                $name = $data['name'];
            }
            $ses_data = [
                // 'id'       => $data['id'],
                'name'     => $name,
                'email'    => $data['email'],
                'title'    => $data['title'],
                'user_type'    => $data['user_type'],
                'logged_in'     => TRUE
            ];
            $session->set($ses_data);
            // echo '<pre>'; print_r($session->get()); echo '</pre>'; exit;
            if(strtolower($data['user_type']) == 'administrator'){
                return redirect()->to('/public/admin/dashboard');
            }
            else if(strtolower($data['user_type']) == 'customer'){
                return redirect()->to('/public/user/homeAL/userdash');
            }
            else {
                return redirect()->to('/public/home');
            }
        }
        else{
            $session->setFlashdata('msg', 'Phone not Found please check if the number is correct or write number without the country code "+880"');
            return redirect()->to('/public/login');
        }
    }

    public function signin()
    {
        $session = session();
        $model = new UserInfoModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->IsExist($email,null);
        // echo '<pre>'; print_r($data); echo '</pre>'; exit;
        if($data){
             $password;
             $pass = $data['password'];
             $verify_pass = password_verify($password, $pass);
            
            if($verify_pass){
                $ses_data = [
                    // 'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'title'    => $data['title'],
                    'user_type'    => $data['user_type'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                // echo '<pre>'; print_r($session->get()); echo '</pre>'; exit;
                if(strtolower($data['user_type']) == 'administrator'){
                    return redirect()->to('/public/admin/dashboard');
                }
                else if(strtolower($data['user_type']) == 'customer'){
                    return redirect()->to('/public/user/homeAL/userdash');
                }
                else {
                    return redirect()->to('/public/home');
                }
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/public/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/public/login');
        }

    }
    public function signout()
    { 
        $session = session();
        // echo '<pre>'; print_r($session->get()); echo '</pre>'; exit;
        $session->destroy();  
        return redirect()->to('/public/home');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}