<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\CareersModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['key'] = 'Welcome to Prism Dashboard';
        return view('admin/dashboard', $data);
    }
}
?>