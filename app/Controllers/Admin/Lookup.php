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

   public function create()
    {
        $session = session();
        $model = new LookUpModel();
        $data = [];
        $rules = [
            'lookupname'          => 'required|min_length[3]|max_length[20]',
            'shortname'         => 'required|min_length[1]|max_length[50]',
            'sortorder'      => 'required',
            'looktypeid'  => 'required'
        ];

        if($this->validate($rules)) {
            $data = [
                'look_up_name'     => $this->request->getVar('lookupname'),
                'short_name'    => $this->request->getVar('shortname'),
                'sort_order'    => $this->request->getVar('sortorder'),
                'look_type_id' => $this->request->getVar('looktypeid')
            ];
            $result = $model->add($data);
            return redirect()->to('public/admin/lookup');
        }
        else {
            return view('admin/lookup'); 
            }
        }
}