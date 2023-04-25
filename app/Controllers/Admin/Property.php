<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PropertyInfoModel;
class Property extends BaseController
{
    public function index()
    {
        $model = new PropertyInfoModel();
        $data['propertylist'] = $model->get(null,null,null);
        return view('admin/property', $data);
    }

   public function add()
   { 
        $model = new PropertyInfoModel();
        $data['propertytypelist'] = $model->getByCriteria(1);
        $data['amenitylist'] = $model->getByCriteria(3);
        $data['renovationlist'] = $model->getByCriteria(4);
        $data['propertystslist'] = $model->getByCriteria(7);
        $data['descriptivelist'] = $model->getByCriteria(8);
        $data['purposelist'] = $model->getByCriteria(9);
        $data['servicelist'] = $model->getByCriteria(5);
        //echo '<pre>'; print_r($data); echo '</pre>'; exit;
        return view('admin/propertyAdd', $data);
   }
   public function delete($property_id)
   { 
        $session = session();    
        $model = new PropertyInfoModel();
        $result = $model->erase($property_id);
        if($result == null) {
            return redirect()->to('public/admin/property');
        }
        else {
            $session->setFlashdata('msg', $result);
            $data['propertylist'] = $model->get(null,null,null);
            return view('admin/property', $data);
        }
   }
   public function edit($property_id)
   { 
       $model = new PropertyInfoModel();
       $data['propertytypelist'] = $model->getByCriteria(1);
       $data['amenitylist'] = $model->getByCriteria(3);
       $data['renovationlist'] = $model->getByCriteria(4);
       $data['propertystslist'] = $model->getByCriteria(7);
       $data['descriptivelist'] = $model->getByCriteria(8);
       $data['purposelist'] = $model->getByCriteria(9);
       $data['item'] = $model->get($property_id,null,null)[0];
       //echo '<pre>'; print_r($data2); echo '</pre>'; exit; 
       return view('admin/propertyAdd',$data);
   }

   public function create()
    {

        $session = session();
        // echo '<pre>'; print_r($session->get()); echo '</pre>'; exit;
        $model = new PropertyInfoModel();
        $data = $rules = [];
        $actiontype = $this->request->getVar('actiontype');
        if($actiontype == 'update' ){
            $rules = [
                'name'        => 'required',
                'description' => 'required',
                'city'   => 'required',
                'area'  => 'required',
                'propertysize'  => 'required',
                'beds'  => 'required',
                'baths'  => 'required',
                'price'  => 'required',
                'occupied'  => 'required',
                'phone'  => 'required',
                'address'  => 'required',
                'level'  => 'required',
                'email'  => 'required',
                'purposecode'  => 'required',
                'propertytypecode'  => 'required',
                'descriptivestatuscode'  => 'required',
                'propertystatuscode'  => 'required'
            ];
        }
        else {
            $rules = [
                'name'        => 'required',
                'description' => 'required',
                'city'   => 'required',
                'area'  => 'required',
                'propertysize'  => 'required',
                'beds'  => 'required',
                'baths'  => 'required',
                'price'  => 'required',
                'occupied'  => 'required',
                'phone'  => 'required',
                'address'  => 'required',
                'level'  => 'required',
                'email'  => 'required',
                'purposecode'  => 'required',
                'propertytypecode'  => 'required',
                'descriptivestatuscode'  => 'required',
                'propertystatuscode'  => 'required',
                'floorplan' => [
                    'uploaded[floorplan]',
                    'mime_in[floorplan,image/jpg,image/jpeg,image/png]',
                    'max_size[floorplan,1024]',
                ]
            ];
        }
        
        if($this->validate($rules)) {
            $img = $this->request->getFile('floorplan');
            $newName = $this->request->getVar('name').'_'.date('Ymd_His').'.'.$img->guessExtension();
            $data = [
                'property_name'     => $this->request->getVar('name'),
                'description'    => $this->request->getVar('description'),
                'city'    => $this->request->getVar('city'),
                'property_area' => $this->request->getVar('area'),
                'property_size' => $this->request->getVar('propertysize'),
                'beds' => $this->request->getVar('beds'),
                'baths' => $this->request->getVar('baths'),
                'price' => $this->request->getVar('price'),
                'is_occupied' => $this->request->getVar('occupied'),
                'floor_plan' =>'public/uploads/'.$newName,
                'phone' => $this->request->getVar('phone'),
                'property_address' => $this->request->getVar('address'),
                'level' => $this->request->getVar('level'),
                'email' => $this->request->getVar('email'),
                'purpose_code' => $this->request->getVar('purposecode'),
                'property_type_code' => $this->request->getVar('propertytypecode'),
                'descriptive_status_code' => $this->request->getVar('descriptivestatuscode'),
                'amenities_code' => $this->request->getVar('amenitiescode'),
                'property_status_code' => $this->request->getVar('propertystatuscode'),
                'property_id' => $this->request->getVar('propertyid')
            ];
            if($actiontype == 'update' ){
                $result = $model->edit($data);
                $img->move(ROOTPATH . 'public/uploads',$newName);
            }
            else {
                $result = $model->add($data);
                $img->move(ROOTPATH . 'public/uploads',$newName);
            }
            if($result <= 0) {
                $session->setFlashdata('msg', 'Property saved failed. Please try again later!');
                return view('public/admin/propertyAdd', $data);
            }
            else {
                $session->setFlashdata('msg', 'Property save Successful. Thank you!');
                return redirect()->to('public/admin/property');
            }  
        } 
        else {
            $data['propertytypelist'] = $model->getByCriteria(1);
            $data['amenitylist'] = $model->getByCriteria(3);
            $data['renovationlist'] = $model->getByCriteria(4);
            $data['propertystslist'] = $model->getByCriteria(7);
            $data['descriptivelist'] = $model->getByCriteria(8);
            $data['purposelist'] = $model->getByCriteria(9);
            $data['validation'] = $this->validator;
            echo view('admin/propertyAdd', $data); 
        }
    }
}