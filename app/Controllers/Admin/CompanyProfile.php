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
   public function delete($company_id)
   { 
        $session = session();    
        $model = new CompanyProfileModel();
        $result = $model->erase($company_id);
        if($result == null) {
            return redirect()->to('public/admin/companyprofile');
        }
        else {
            $session->setFlashdata('msg', $result);
            $data['userlist'] = $model->get(null);
            return view('admin/companyprofile', $data);
        }
   }
   public function edit($company_id)
   { 
       $model = new CompanyProfileModel();
       $data['item'] = $model->getByCriteria($company_id);
    //    echo '<pre>'; print_r($data); echo '</pre>'; exit; 
       return view('admin/companyprofileAdd',$data);
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
                'company_email' => $this->request->getVar('company_email'),
                'company_id' => $this->request->getVar('companyid')
            ];
            $actiontype = $this->request->getVar('actiontype');
            
            if($actiontype == 'update' ){
                $result = $model->edit($data);
            }
            else {
                $result = $model->add($data);
            }
            if($result <= 0) {
                $session->setFlashdata('msg', 'saved failed. Please try again later!');
                return view('public/admin/companyprofileAdd', $data);
            }
            else {
                $session->setFlashdata('msg', 'save Successful. Thank you!');
                return redirect()->to('public/admin/companyprofile');
            }  
        }
        else {
            $data['validation'] = $this->validator;
            $data['item'] = $model->getByCriteria($this->request->getVar('email'));
            return view('admin/companyprofileAdd', $data); 
        }
    }
}