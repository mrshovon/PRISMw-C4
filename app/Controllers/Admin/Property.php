<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PropertyInfoModel;
class Property extends BaseController
{
    public function index()
    {
        $model = new PropertyInfoModel();
        $data['propertylist'] = $model->get();
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
        // echo '<pre>'; print_r($data); echo '</pre>'; exit;
        return view('admin/propertyAdd', $data);
   }

   public function create()
    {
        $session = session();
        $model = new PropertyInfoModel();
        $data = [];
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
            'amenitiescode'  => 'required',
            'propertystatuscode'  => 'required'
        ];

        if($this->validate($rules)) {
            $data = [
                'name'     => $this->request->getVar('lookupname'),
                'description'    => $this->request->getVar('description'),
                'city'    => $this->request->getVar('city'),
                'area' => $this->request->getVar('area'),
                'property_size' => $this->request->getVar('propertysize'),
                'beds' => $this->request->getVar('beds'),
                'baths' => $this->request->getVar('baths'),
                'price' => $this->request->getVar('price'),
                'is_occupied' => $this->request->getVar('occupied'),
                'floor_plan' => $this->request->getVar('floorplan'),
                'phone' => $this->request->getVar('phone'),
                'address' => $this->request->getVar('address'),
                'level' => $this->request->getVar('level'),
                'email' => $this->request->getVar('email'),
                'purpose_code' => $this->request->getVar('purposecode'),
                'property_type_code' => $this->request->getVar('propertytypecode'),
                'descriptive_status_code' => $this->request->getVar('descriptivestatuscode'),
                'amenities_code' => $this->request->getVar('amenitiescode'),
                'property_status_code' => $this->request->getVar('propertystatuscode')
            ];
            $result = $model->add($data);
            return redirect()->to('public/admin/property');
        }
        else {
            return view('admin/propertyAdd'); 
            }
        }
}