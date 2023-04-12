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

   public function edit($look_type_id)
   { 
       $model = new LookTypeModel();
       $data['item'] = $model->getByCriteria($look_type_id);
        // echo '<pre>'; print_r($data); echo '</pre>'; exit; 
       return view('admin/looktypeAdd',$data);
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
                'look_type_name' => $this->request->getVar('looktypename'),
                'look_type_id' => $this->request->getVar('looktypeid')
            ];
            $actiontype = $this->request->getVar('actiontype');
            
            if($actiontype == 'update' ){
                $result = $model->edit($data);
            }
            else {
                $result = $model->add($data);
            }
            if($result <= 0) {
                $session->setFlashdata('msg', 'look type name saved failed. Please try again later!');
                return view('public/admin/looktypeAdd', $data);
            }
            else {
                $session->setFlashdata('msg', 'Look type name save Successful. Thank you!');
                return redirect()->to('public/admin/looktype');
            }  
        }
        else {
            $data['validation'] = $this->validator;
            $data['item'] = $model->getByCriteria($this->request->getVar('email'));
            return view('admin/looktypeAdd', $data); 
        }
    }
}