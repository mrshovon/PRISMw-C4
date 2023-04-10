<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LookTypeModel;

class Looktype extends BaseController
{
    public function index()
    {
        $model = new LookTypeModel();
        $data['looktypelist'] = $model->get();        
        return view('admin/looktype', $data);
    }

   public function add()
   { 
        return view('admin/looktypeAdd');
   }
}