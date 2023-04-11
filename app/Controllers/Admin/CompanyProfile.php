<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CompanyProfileModel;

class CompanyProfile extends BaseController
{
    public function index()
    {
        $model = new CompanyProfileModel();
        $data['companylist'] = $model->get();
        return view('admin/companyprofile', $data);
    }

   public function add()
   { 
        return view('admin/companyprofileAdd');
   }

   public function create()
    {
        $session = session();
        $model = new CompanyProfileModel();
        $data = [];
        $rules = [
            'company_name'   => 'required|min_length[3]|max_length[20]',
            'company_vision' => 'required|min_length[6]|max_length[500]',
            'company_address' => 'required',
            'company_email'  => 'required'  
        ];
       
        if($this->validate($rules)) {
            $data = [
                'company_name' => $this->request->getVar('company_name'),
                'company_vision' => $this->request->getVar('company_vision'),
                'company_address' => $this->request->getVar('company_address'),
                'company_email' => $this->request->getVar('company_email')
            ];
            $result = $model->add($data);
            return redirect()->to('public/admin/companyprofile');
        }
        else {
             $data['validation'] = $this->validator;
            // $data['item'] = $model->getByCriteria($this->request->getVar('email'));
            echo view('admin/companyprofileAdd',$data); 
        }
    }
}