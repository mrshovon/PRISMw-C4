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
}
