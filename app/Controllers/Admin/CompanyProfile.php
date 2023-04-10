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
}