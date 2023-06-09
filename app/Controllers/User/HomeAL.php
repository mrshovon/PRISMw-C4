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
        $data = array_merge($this->global, $data); 
        return view('prism/userdash',$data);
    }
    public function careers()
    {
        $model = new CareersModel();
        $data['joblist'] = $model->get();
        $data = array_merge($this->global, $data);
        return view('prism/careers copy', $data);
    }
    public function favourite()
    { 
        $session = session();   
        $model = new FavouritesModel();
        $action = $this->request->getVar('actiontype');
        $data = [
            'email' => session()->get('email'),
            'property_id' => $this->request->getVar('property_id')
        ];
        if($action == 'add'){
            $result = $model->add($data);
        }
        else{
            $result = $model->erase($data);
        }
        if($result <= 0) {
            $session->setFlashdata('msg', 'You already requested for these service. Thank you!');
            return view('prism/propertydetails');
        }
        else {
            $session->setFlashdata('msg', 'Added to favourite Successful. Thank you!');
            $email = session()->get('email');
            $model = new PropertyInfoModel();
            $data['propertylist'] = $model->get($data['property_id'],null,null);
            $model2 = new FavouritesModel();
            $data['list'] = $model2->getByCriteria($email,$data['property_id']);
            $data = array_merge($this->global, $data);
            return view('prism/propertydetails', $data);
        }  
   }
   public function delfavourite()
    { 
        $session = session();   
        $model = new FavouritesModel();
        $data = [
            'email' => session()->get('email'),
            'property_id' => $this->request->getVar('property_id')
        ];
        $result = $model->erase($data);
        if($result <= 0) {
            $session->setFlashdata('msg', 'You already requested for these service. Thank you!');
            return view('prism/propertydetails');
        }
        else {
            $session->setFlashdata('msg', 'Added to favourite Successful. Thank you!');
            $email = session()->get('email');
            $model = new PropertyInfoModel();
            $data['propertylist'] = $model->get($data['property_id'],null,null);
            $model2 = new FavouritesModel();
            $data['list'] = $model2->getByCriteria($email,$data['property_id']);
            $data = array_merge($this->global, $data);
            return view('prism/propertydetails', $data);
        }  
   }
    public function aboutus()
    {
        $model = new CompanyProfileModel();
        $data['company'] = $model->getByCriteria(1);
        $data = array_merge($this->global, $data);
        return view('prism/aboutus copy', $data);
    }

    public function contactus()
    {
        return view('prism/contactus copy', $this->global);
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
        $result = $model->add($data);
        if($result <= 0) {
            $data = array_merge($this->global, $data);
            return view('prism/addproperty', $data);
        }
        else {
            return redirect()->to('/public/user/homeAL/userdash');
        }  
    }
   
    public function homeloan()
    {
        return view('prism/homeloan copy',$this->global);
    }
    public function reqhomeloan()
    {
        $session = session();
        $model = new HomeLoanModel();
        $data = [
            'name' => session()->get('name'),
            'phone' => $this->request->getVar('phone'),
            'email' => session()->get('email'),
            'property_id' => $this->request->getVar('property_id')
        ];
        $result = $model->add($data);
        if($result <= 0) {
            $session->setFlashdata('msg', 'You already requested for these service. Thank you!');
            return redirect()->to('/public/user/homeAL/homeloan');
        }
        else {
            $session->setFlashdata('msg', 'Home loan Request Taken. Thank you!');
            return redirect()->to('/public/user/homeAL/homeloan');
        }  
    }
    public function renovation()
    {
        $model = new PropertyInfoModel();
        $data['renovationlist'] = $model->getByCriteria(4);
        $data = array_merge($this->global, $data);
        return view('prism/renovation copy', $data);
    }
    public function reqrenovation()
    {
        $session = session();
        $model = new RenovationModel();
        $data = [
            'name' => session()->get('name'),
            'phone' => $this->request->getVar('phone'),
            'email' => session()->get('email'),
            'property_size' => $this->request->getVar('size'),
            'property_address' => $this->request->getVar('address'),
            'property_city' => $this->request->getVar('city'),
            'property_area' => $this->request->getVar('area'),
            'service_code' => $this->request->getVar('renovate')
        ];
        $result = $model->add($data);
        if($result <= 0) {
            $session->setFlashdata('msg', 'You already requested for these service. Thank you!');
            return redirect()->to('/public/user/homeAL/renovation');
        }
        else {
            $session->setFlashdata('msg', 'Renovation service request accepted. Thank you!');
            return redirect()->to('/public/user/homeAL/renovation');
        }  
    }

    public function legalservices()
    {
        $model = new PropertyInfoModel();
        $data['servicelist'] = $model->getByCriteria(5);
        $data = array_merge($this->global, $data);
        return view('prism/legalservices copy', $data);
        
    }

    public function requestLegalservices()
    {
        $session = session();
        $model = new LegalServicesModel();
        $data = [
            'service_code' => $this->request->getVar('service[]')
        ];
        foreach($data['service_code'] as $service){
            $data = [
                'name' => $this->request->getVar('name'),
                'phone' => $this->request->getVar('phone'),
                'email' => $this->request->getVar('email'),
                'service_code' => $service
            ];
            $result = $model->add($data);
        } 
        if($result <= 0) {
            $session->setFlashdata('msg', 'You already requested for these service. Thank you!');
            return redirect()->to('/public/user/homeAL/legalservices');
        }
        else {
            $session->setFlashdata('msg', 'Legal service request Successful. Thank you!');
            return redirect()->to('/public/user/homeAL/legalservices');
        }  
    }
    public function userdash()
    {
        $model = new PropertyInfoModel();
        $data['propertylist'] = $model->get(null,null,null);
        $data = array_merge($this->global, $data);
        return view('prism/userdash', $data);
    }
    public function userprofile($email)
    {
        $model = new UserInfoModel();
        $model2 = new PropertyInfoModel();
        $data['item'] = $model->getByCriteria($email);
        $data['divisionlist'] = $model2->getByCriteria(10);
        $data = array_merge($this->global, $data); 
        return view('prism/userprofile', $data);
    }
    public function userprofileupdate(){
        $session = session();
        $model = new UserInfoModel();
        $model2 = new PropertyInfoModel();
        $data = [];
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            // 'email'         => '|min_length[6]|max_length[50]|valid_email',
            // 'password'      => 'required|min_length[6]|max_length[200]',
            // 'confpassword'  => 'matches[password]'
        ];
        if($this->validate($rules)) {
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'phone'    => $this->request->getVar('phone'),
                'user_type'    => 'customer',
                'title'    => $this->request->getVar('title'),
                'nid'    => $this->request->getVar('nid'),
                'address'    => $this->request->getVar('address'),
                'dob'    => $this->request->getVar('dob'),
                'gender'    => $this->request->getVar('gender'),
                'occupation'    => $this->request->getVar('occupation'),
                'division'    => $this->request->getVar('division'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $result = $model->edit($data);
            $session->set('name', $data['name']);
            if($result <= 0) {
                $session->setFlashdata('msg', 'User saved failed. Please try again later!');
                $data['item'] = $model->getByCriteria($data['email']);
                $data['divisionlist'] = $model2->getByCriteria(10);
                $data = array_merge($this->global, $data);
                return view('prism/userprofile', $data);
            }
            else {
                $session->setFlashdata('msg', 'User save Successful. Thank you!');
                $data['item'] = $model->getByCriteria($data['email']);
                $data['divisionlist'] = $model2->getByCriteria(10);
                $data = array_merge($this->global, $data); 
                return view('prism/userprofile', $data);
            }  
        }
        else {
            $data['validation'] = $this->validator;
            $data['item'] = $model->getByCriteria($this->request->getVar('email'));
            $data['divisionlist'] = $model2->getByCriteria(10);
            $data = array_merge($this->global, $data);
            return view('prism/userprofile', $data); 
        }
    }
    public function propertydetails($property_id)
    {
        $session = session();
        $email = session()->get('email');
        $model = new PropertyInfoModel();
        $model2 = new FavouritesModel();
        $data['propertylist'] = $model->get($property_id,null,null);
        $data['list'] = $model2->getByCriteria($email,$property_id);
        $data = array_merge($this->global, $data);
        return view('prism/propertydetails', $data);
    }
    public function bookvisit()
    { 
        $session = session();   
        $model = new BookVisitModel();
        $data = [
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'email' => $this->request->getVar('email'),
            'remarks' => $this->request->getVar('remarks'),
            'property_id' => $this->request->getVar('property_id')
        ];
        $result = $model->add($data);
        if($result <= 0) {
            $session->setFlashdata('msg', 'You already requested for these service. Thank you!');
            return view('prism/propertydetails');
        }
        else {
            $session->setFlashdata('msg', 'Legal service request Successful. Thank you!');
            $email = session()->get('email');
            $model = new PropertyInfoModel();
            $model2 = new FavouritesModel();
            $data['propertylist'] = $model->get($data['property_id'],null,null);
            $data['list'] = $model2->getByCriteria($email,$data['property_id']);
            $data = array_merge($this->global, $data);
            return view('prism/propertydetails', $data);
        }  
    }
    public function addproperty()
    {
        return view('prism/userdash',$this->global);
    }
    public function search()
    {
        $model = new PropertyInfoModel();
        $property_area = $this->request->getVar('area');
        $purpose = $this->request->getVar('purpose');
        $data['propertylist'] = $model->get(null,$property_area,$purpose);
        $data = array_merge($this->global, $data);
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
        $data = array_merge($this->global, $data);
        return view('prism/addproperty', $data);
   }
   public function create()
   {
       $session = session();
       $model = new PropertyInfoModel();
       $data = $rules = [];
       $actiontype = $this->request->getVar('actiontype');
       $aminity = implode(",", $this->request->getVar('amenities[]'));
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
               'amenities' => $aminity,
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
               $data = array_merge($this->global, $data);
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
           $data = array_merge($this->global, $data);
           echo view('prism/addproperty', $data); 
       }
   }
}
