<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\InqueryModel;

class Inquery extends BaseController
{
    public function index()
    {
        $model = new InqueryModel();
        $data['inquerylist'] = $model->get();
        $data = array_merge($this->global, $data);
        return view('admin/inquery', $data);
    }
    public function delete($inquery_id)
    {
        $session = session();    
        $model = new InqueryModel();
        $result = $model->erase($inquery_id);
        if($result == null) {
            return redirect()->to('public/admin/inquery');
        }
        else {
            // $session->setFlashdata('msg', $result);
            $data['inquerylist'] = $model->get();
            $data = array_merge($this->global, $data);
            return view('admin/inquery', $data);
        }
    }
}

