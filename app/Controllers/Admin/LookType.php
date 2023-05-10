<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LookTypeModel;

class Looktype extends BaseController
{
    public function index()
    {
        $model = new LookTypeModel();
        $data['looktypelist'] = $model->get();  
        $data = array_merge($this->global, $data);      
        return view('admin/looktype', $data);
    }

   public function add()
   { 
        return view('admin/looktypeAdd',$this->global);
   }
   public function delete($look_type_id)
   { 
        $session = session();    
        $model = new LookTypeModel();
        $result = $model->erase($look_type_id);
        if($result == null) {
            return redirect()->to('public/admin/looktype');
        }
        else {
            $session->setFlashdata('msg', $result);
            $data['looktypelist'] = $model->get(null);
            $data = array_merge($this->global, $data);
            return view('admin/looktype', $data);
        }
   }
   public function edit($look_type_id)
   { 
       $model = new LookTypeModel();
       $data['item'] = $model->getByCriteria($look_type_id);
       $data = array_merge($this->global, $data); 
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
                'look_type_id' => $this->request->getVar('looktypeid'),
                'email' => session()->get('email')
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
                $data = array_merge($this->global, $data);
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
            $data = array_merge($this->global, $data);
            return view('admin/looktypeAdd', $data); 
        }
    }
}