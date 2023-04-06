<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Careers extends BaseController
{
    public function index()
    {
        return view('admin/careers');
    }

   public function add()
   { 
        return view('admin/careersAdd');
   }
}
