<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CareersModel;

class Careers extends BaseController
{
    public function index()
    {
        $model = new CareersModel();
        $data['joblist'] = $model->get();
        $data = array_merge($this->global, $data);
        return view('admin/careers', $data);
    }

   public function add()
   { 
        return view('admin/careersAdd',$this->global);
   }
   public function delete($career_id)
   { 
        $session = session();    
        $model = new CareersModel();
        $result = $model->erase($career_id);
        if($result == null) {
            return redirect()->to('public/admin/careers');
        }
        else {
            $session->setFlashdata('msg', $result);
            $data['joblist'] = $model->get(null);
            $data = array_merge($this->global, $data);
            return view('admin/careers', $data);
        }
   }
   public function edit($career_id)
   { 
       $model = new CareersModel();
       $data['item'] = $model->getByCriteria($career_id);
       $data = array_merge($this->global, $data);
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
                $data = array_merge($this->global, $data);
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
            $data = array_merge($this->global, $data);
            return view('admin/careersAdd', $data); 
        }
    }
}

