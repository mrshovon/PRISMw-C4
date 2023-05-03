<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\CareersModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['key'] = 'Welcome to Prism Dashboard';
        $data = array_merge($this->global, $data);
        return view('admin/dashboard', $data);
    }
}
?>