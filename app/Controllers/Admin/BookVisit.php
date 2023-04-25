<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BookVisitModel;

class BookVisit extends BaseController
{
    public function index()
    {
        $model = new BookVisitModel();
        $data['visitlist'] = $model->get();
        return view('admin/bookvisit', $data);
    }
    public function delete($inquery_id)
    {
        $session = session();    
        $model = new BookVisitModel();
        $result = $model->erase($inquery_id);
        if($result == null) {
            return redirect()->to('public/admin/bookvisit');
        }
        else {
            // $session->setFlashdata('msg', $result);
            $data['visitlist'] = $model->get();
            return view('admin/bookvisit', $data);
        }
    }
}

