<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RenovationModel;

class Renovation extends BaseController
{
    public function index()
    {
        $model = new RenovationModel();
        $data['renovationreqlist'] = $model->get();
        $data = array_merge($this->global, $data);
        return view('admin/renovation', $data);
    }
    public function delete($request_id)
    {
        $session = session();    
        $model = new RenovationModel();
        $result = $model->erase($request_id);
        if($result == null) {
            return redirect()->to('public/admin/legalservice');
        }
        else {
            // $session->setFlashdata('msg', $result);
            $data['renovationreqlist'] = $model->get();
            $data = array_merge($this->global, $data);
            return view('admin/renovation', $data);
        }
    }
}