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
                'job_description' => $this->request->getVar('job_description')
            ];
            $result = $model->add($data);
            return redirect()->to('public/admin/careers');
        }
        else {
            return view('admin/careers'); 
            }
        }
    }

