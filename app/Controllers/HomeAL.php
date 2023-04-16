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


class HomeAL extends BaseController
{
    public function index()
    {
         return view('prism/home');
        // return view('admin/looktype');
    }
    public function careers()
    {
        $model = new CareersModel();
        $data['joblist'] = $model->get();
        // echo '<pre>';print_r($data);echo '</pre>'; exit;
        return view('prism/careers copy', $data);
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
        
        return view('prism/addproperty');
    }
    public function search()
    {
        $model = new PropertyInfoModel();
        $property_area = $this->request->getVar('area');
        $purpose = $this->request->getVar('purpose');
        $data['propertylist'] = $model->get(null,$property_area,$purpose);
        return view('prism/userdash', $data);
    }
     public function signout()
    { 
        $session = session();
        $session->destroy();
        return redirect()->to('/public/home');
    }
    
}
