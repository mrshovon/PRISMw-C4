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

   public function edit($look_up_id)
   { 
       $model = new LookUpModel();
       $data['item'] = $model->getByCriteria($look_up_id);
    //    echo '<pre>'; print_r($data); echo '</pre>'; exit; 
       return view('admin/lookupAdd',$data);
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
                'look_type_id' => $this->request->getVar('looktypeid'),
                'look_up_id'    => $this->request->getVar('lookupid')
            ];
            $actiontype = $this->request->getVar('actiontype');
            
            if($actiontype == 'update' ){
                $result = $model->edit($data);
            }
            else {
                $result = $model->add($data);
            }
            if($result <= 0) {
                $session->setFlashdata('msg', 'look up name saved failed. Please try again later!');
                return view('public/admin/lookupAdd', $data);
            }
            else {
                $session->setFlashdata('msg', 'Look type name save Successful. Thank you!');
                return redirect()->to('public/admin/lookup');
            }  
        }
        else {
            $data['validation'] = $this->validator;
            $data['item'] = $model->getByCriteria($this->request->getVar('email'));
            return view('admin/lookupAdd', $data); 
        }
    }
}