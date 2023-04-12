<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CareersModel;

class Careers extends BaseController
{
    public function index()
    {
        $model = new CareersModel();
        $data['joblist'] = $model->get();
        return view('admin/careers', $data);
    }

   public function add()
   { 
        return view('admin/careersAdd');
   }

   public function edit($career_id)
   { 
       $model = new CareersModel();
       $data['item'] = $model->getByCriteria($career_id);
    //    echo '<pre>'; print_r($data); echo '</pre>'; exit; 
       return view('admin/careersAdd',$data);
   }

   public function create()
    {
        $session = session();
        $model = new CareersModel();
        $data = [];
        $rules = [
            'job_title'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'phone'      => 'required',
            'job_description'  => 'required'
        ];

        if($this->validate($rules)) {
            $data = [
                'job_title'     => $this->request->getVar('job_title'),
                'email'    => $this->request->getVar('email'),
                'phone'    => $this->request->getVar('phone'),
                'job_description' => $this->request->getVar('job_description'),
                'career_id' => $this->request->getVar('careerid')
            ];
            $actiontype = $this->request->getVar('actiontype');
            
            if($actiontype == 'update' ){
                $result = $model->edit($data);
            }
            else {
                $result = $model->add($data);
            }
            if($result <= 0) {
                $session->setFlashdata('msg', 'Job saved failed. Please try again later!');
                return view('public/admin/careersAdd', $data);
            }
            else {
                $session->setFlashdata('msg', 'Job save Successful. Thank you!');
                return redirect()->to('public/admin/careers');
            }  
        }
        else {
            $data['validation'] = $this->validator;
            $data['item'] = $model->getByCriteria($this->request->getVar('email'));
            return view('admin/careersAdd', $data); 
        }
    }
}

