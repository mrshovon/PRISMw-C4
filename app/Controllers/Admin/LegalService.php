<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LegalServicesModel;

class LegalService extends BaseController
{
    public function index()
    {
        $model = new LegalServicesModel();
        $data['legalservicereqlist'] = $model->get();
        $data = array_merge($this->global, $data);
        return view('admin/legalservice', $data);
    }
    public function delete($email,$service_code)
    {
        $session = session();    
        $model = new LegalServicesModel();
        $result = $model->erase($email,$service_code);
        if($result == null) {
            return redirect()->to('public/admin/legalservice');
        }
        else {
            // $session->setFlashdata('msg', $result);
            $data['legalservicereqlist'] = $model->get();
            $data = array_merge($this->global, $data);
            return view('admin/legalservice', $data);
        }
    }
}