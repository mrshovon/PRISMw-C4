<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        return view('admin/user');
    }

   public function add()
   { 
        return view('admin/userAdd');
   }
}