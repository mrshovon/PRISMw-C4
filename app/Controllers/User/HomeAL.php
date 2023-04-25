<?php namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\LookTypeModel;
use App\Models\UserInfoModel;
use App\Models\LookUpModel;
use App\Models\CompanyProfileModel;
use App\Models\SliderModel;
use App\Models\InqueryModel;
use App\Models\CareersModel;
use App\Models\LegalServicesModel;
use App\Models\PropertyInfoModel;
use App\Models\HomeLoanModel;
use App\Models\BookVisitModel;
use App\Models\RenovationModel;
use App\Models\FavouritesModel;


class HomeAL extends BaseController
{
    public function index()
    {
         return view('prism/userdash');
        // return view('admin/looktype');
    }
    public function careers()
    {
        $model = new CareersModel();
        $data['joblist'] = $model->get();
        // echo '<pre>';print_r($data);echo '</pre>'; exit;
        return view('prism/careers copy', $data);
    }
    public function aboutus()
    {
        return view('prism/aboutus copy');
    }

    public function contactus()
    {
        return view('prism/contactus copy');
    }
    public function sendmessage()
    {
        $session = session();
        $model = new InqueryModel();
        $data = [
            'customer_name' => $this->request->getVar('name'),
            'phone' => $this->request->getVar('Phone'),
            'address' => $this->request->getVar('Address'),
            'query' => $this->request->getVar('message')
        ];
        // echo '<pre>';print_r($data);echo '</pre>'; exit;
        $result = $model->add($data);
        // echo $result; exit;
        if($result <= 0) {
            return view('prism/addproperty', $data);
        }
        else {
            return redirect()->to('/public/user/homeAL/userdash');
        }  
    }
   
    public function homeloan()
    {
        return view('prism/homeloan copy');
    }

    public function renovation()
    {
        $model = new PropertyInfoModel();
        $data['renovationlist'] = $model->getByCriteria(4);
        //echo '<pre>'; print_r($data); echo '</pre>'; exit;
        return view('prism/renovation copy', $data);
    }

    public function legalservices()
    {
        $model = new PropertyInfoModel();
        $data['servicelist'] = $model->getByCriteria(5);
        //echo '<pre>'; print_r($data); echo '</pre>'; exit;
        return view('prism/legalservices copy', $data);
    }
    public function userdash()
    {
        $model = new PropertyInfoModel();
        $data['propertylist'] = $model->get(null,null,null);
        return view('prism/userdash', $data);
    }
    public function propertydetails($property_id)
    {
        $model = new PropertyInfoModel();
        $data['propertylist'] = $model->get($property_id,null,null);
        // echo '<pre>';print_r($data);echo '</pre>'; exit;
        return view('prism/propertydetails', $data);
    }
    public function addproperty()
    {
        
        return view('prism/userdash');
    }
    public function search()
    {
        $model = new PropertyInfoModel();
        $property_area = $this->request->getVar('area');
        $purpose = $this->request->getVar('purpose');
        $data['propertylist'] = $model->get(null,$property_area,$purpose);
        return view('prism/userdash', $data);
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
        //echo '<pre>'; print_r($data); echo '</pre>'; exit;
        return view('prism/addproperty', $data);
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
               'descriptivestatuscode'  => 'required'
            //    'propertystatuscode'  => 'required'
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
            //    'propertystatuscode'  => 'required',
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
               'property_status_code' => '7',
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
               $session->setFlashdata('msg', 'Listing property failed. Please try again later!');
               return view('prism/addproperty', $data);
           }
           else {
               $session->setFlashdata('msg', 'Property listed Successful. Thank you!');
               return redirect()->to('/public/user/homeAL/userdash');
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
           echo view('prism/addproperty', $data); 
       }
   }
}
