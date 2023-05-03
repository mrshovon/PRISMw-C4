<?php namespace App\Controllers;

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


class Home extends BaseController
{
    public function index()
    {
        if(session()->get('logged_in')){
            
            if(session()->get('user_type') == 'customer'){
                $model = new PropertyInfoModel();
                $data['propertylist'] = $model->get(null,null,null);
                $data = array_merge($this->global, $data);
                return view('prism/userdash', $data);
            }
            else {
                $data['key'] = 'Welcome to Prism Dashboard';
                $data = array_merge($this->global, $data);
                return view('admin/dashboard', $data);
            }
        }

        $model = new PropertyInfoModel();
        $data['propertylist'] = $model->get(null,null,null);
        $data = array_merge($this->global, $data);
        return view('prism/home', $data);
    }
    public function signup()
    {
        return view('prism/signup',$this->global);
    }

    public function aboutus()
    {
        $model = new CompanyProfileModel();
        $data['company'] = $model->getByCriteria(1);
        if(session()->get('logged_in')){
            
            if(session()->get('user_type') == 'customer'){
                $data['companylist'] = $model->get();
                $data = array_merge($this->global, $data);
                return view('prism/aboutus copy', $data);
            }
            else {
                $data['key'] = 'Welcome to Prism Dashboard';
                $data = array_merge($this->global, $data);
                return view('admin/dashboard', $data);
            }
        }  
        $data = array_merge($this->global, $data);                     
        return view('prism/aboutus',$data);
    }

    public function contactus()
    {
        if(session()->get('logged_in')){
            
            if(session()->get('user_type') == 'customer'){
                return view('prism/contactus copy',$this->global);
            }
            else {
                $data['key'] = 'Welcome to Prism Dashboard';
                $data = array_merge($this->global, $data);
                return view('admin/dashboard', $data);
            }
        }  
        return view('prism/contactus',$this->global);
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
            return redirect()->to('/public/home');
        }  
    }
    public function careers()
    {
        if(session()->get('logged_in')){
            
            if(session()->get('user_type') == 'customer'){
                $model = new CareersModel();
                $data['joblist'] = $model->get();
                $data = array_merge($this->global, $data);
                return view('prism/careers copy', $data);
            }
            else {
                $data['key'] = 'Welcome to Prism Dashboard';
                $data = array_merge($this->global, $data);
                return view('admin/dashboard', $data);
            }
        }
        $model = new CareersModel();
        $data['joblist'] = $model->get();
        $data = array_merge($this->global, $data);
        return view('prism/careers', $data);
    }


    public function privacypolicy()
    {
        return view('prism/prevacypolicy',$this->global);
    }

    public function homeloan()
    {
        if(session()->get('logged_in')){
            
            if(session()->get('user_type') == 'customer'){
                return view('prism/homeloan copy',$this->global);
            }
            else {
                $data['key'] = 'Welcome to Prism Dashboard';
                $data = array_merge($this->global, $data);
                return view('admin/dashboard', $data);
            }
        }               
        return view('prism/homeloan',$this->global);
    }

    public function renovation()
    {
        if(session()->get('logged_in')){
            
            if(session()->get('user_type') == 'customer'){
                $model = new PropertyInfoModel();
                $data['renovationlist'] = $model->getByCriteria(4);
                $data = array_merge($this->global, $data);
                return view('prism/renovation copy', $data);
            }
            else {
                $data['key'] = 'Welcome to Prism Dashboard';
                $data = array_merge($this->global, $data);
                return view('admin/dashboard', $data);
            }
        }               
        $model = new PropertyInfoModel();
        $data['renovationlist'] = $model->getByCriteria(4);
        $data = array_merge($this->global, $data);
        return view('prism/renovation', $data);
    }

    public function legalservices()
    {
        if(session()->get('logged_in')){
            
            if(session()->get('user_type') == 'customer'){
                $model = new PropertyInfoModel();
                $data['servicelist'] = $model->getByCriteria(5);
                $data = array_merge($this->global, $data);
                return view('prism/legalservices copy', $data);
            }
            else {
                $data['key'] = 'Welcome to Prism Dashboard';
                $data = array_merge($this->global, $data);
                return view('admin/dashboard', $data);
            }
        }               
        $model = new PropertyInfoModel();
        $data['servicelist'] = $model->getByCriteria(5);
        $data = array_merge($this->global, $data);
        return view('prism/legalservices',$data);
    }
    public function userdash()
    {
        return view('prism/userdash',$this->global);
    }
    public function propertydetails()
    {
        return view('prism/propertydetails',$this->global);
    }
    public function addproperty()
    {
        return view('prism/addproperty',$this->global);
    }
    public function signout()
    { 
        $session = session();
        $session->destroy();
        return redirect()->to('/public/home');
    }
}
