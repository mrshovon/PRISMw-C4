<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HomeLoanModel;

class HomeLoan extends BaseController
{
    public function index()
    {
        $model = new HomeLoanModel();
        $data['loanreqlist'] = $model->get();
        return view('admin/homeloan', $data);
    }
    public function delete($email,$action_date)
    {
        $session = session();    
        $model = new HomeLoanModel();
        $result = $model->erase($email,$action_date);
        if($result == null) {
            return redirect()->to('public/admin/homeloan');
        }
        else {
            // $session->setFlashdata('msg', $result);
            $data['loanreqlist'] = $model->get();
            return view('admin/homeloan', $data);
        }
    }
}