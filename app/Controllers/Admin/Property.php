<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PropertyInfoModel;
class Property extends BaseController
{
    public function index()
    {
        $model = new PropertyInfoModel();
        $data['propertylist'] = $model->get();
        return view('admin/property', $data);
    }

   public function add()
   { 
        return view('admin/propertyAdd');
   }
}