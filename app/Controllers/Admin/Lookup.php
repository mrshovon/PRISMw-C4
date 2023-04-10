<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LookUpModel;

class Lookup extends BaseController
{
    public function index()
    {
        $model = new LookUpModel();
        $data['lookuplist'] = $model->get();
        return view('admin/lookup',$data);
    }

   public function add()
   { 
        return view('admin/lookupAdd');
   }
}