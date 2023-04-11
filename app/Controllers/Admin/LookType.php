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

   public function create()
    {
        $session = session();
        $model = new LookTypeModel();
        $data = [];
        $rules = [
            'looktypename' => 'required|min_length[1]|max_length[200]',
        ];

        if($this->validate($rules)) {
            $data = [
                'look_type_name' => $this->request->getVar('looktypename')
            ];
            $result = $model->add($data);
            return redirect()->to('public/admin/looktype');
        }
        else {
            return view('admin/looktype'); 
            }
        }
}