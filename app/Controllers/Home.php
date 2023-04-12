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
        
        // echo $segments = $this->request->uri->getSegments(1);
        // print_r($segments); 
        // echo $num_segments = $this->uri->total_segments();
        // $model = new LookTypeModel();
        // echo 'affected rows: '.$model->add(1,'PropertyType');
        // echo 'affected rows: '.$model->edit(1,'PropertyType');
        
        // $model = new UserInfoModel();
        // echo 'affected rows: '.$model->add('shovon','123456789','01893258696','shovon@gmail.com');
        // echo 'affected rows: '.$model->edit('shovon@gmail.com','Shovon Rahman','rahman12345','01312457896');

        // $model = new LookUpModel();
        // echo 'affected rows: '.$model->add('Documentation','doc','2','5');
        // echo 'affected rows: '.$model->edit(2,'Amenities','Amn');

        // $model = new CompanyProfileModel();
        // echo 'affected rows: '.$model->add('PRISM','vision....text','address....text','email@company.com','privacy policy....file link','terms and condition....file');
        // echo 'affected rows: '.$model->edit(1);

        // $model = new SliderModel();
        // echo 'affected rows: '.$model->edit(1,'img....path2',2);
       
       
        // $model = new InqueryModel();
        // echo 'affected rows: '.$model->add('Shuvo','01723568944','address......text','query.....text');
        // echo 'affected rows: '.$model->edit(1,'Shamiul');
        
        // $model = new CareersModel();
        // echo 'affected rows: '.$model->add('JOB1','Description......text','01789562344','shuvo@gmail.com');
        // echo 'affected rows: '.$model->edit(1,'title...changed','Job_description.............changed');
        
        // $model = new LegalServicesModel();
        // echo 'affected rows: '.$model->add();
        // echo 'affected rows: '.$model->erase('shovon@gmail.com',2);
        // echo 'affected rows: '.$model->edit('shovon@gmail.com',2,'shovon rahman','02345678999');


        // $model = new PropertyInfoModel();
        // echo 'affected rows: '.$model->add('shovon','description.....text','Dhaka','mirpur','1200.00','2','1','12000','0','plan.....file','01723568944','address....text','2','shovon@gmail.com');
        // echo 'affected rows: '.$model->edit(1,'Gulmohor','description.......changed','Pabna','Dhanmondi',1350.00,3,3,5500000.00);
        
        
        
        // $model = new HomeLoanModel();
        // echo 'affected rows: '.$model->add('1');
        // echo 'affected rows: '.$model->edit(1,'shovon@gmail.com','Shovon Rahman','01546137982');



        // $model = new BookVisitModel();
        // echo 'affected rows: '.$model->add('2023-04-23','14:00','16:00','remarks.....text');
        // echo 'affected rows: '.$model->edit(1,'2023-04-23','14:00','16:00','remarks.....text changed');
        
        
        // $model = new RenovationModel();
        // echo 'affected rows: '.$model->add('1');
        // echo 'affected rows: '.$model->edit(1,'shovon@gmail.com',1,500.00);



        // $model = new FavouritesModel();
        // echo 'affected rows: '.$model->add();
        // echo 'affected rows: '.$model->edit('shovon@gmail.com',1);



        
        return view('prism/home');
        // return view('admin/looktype');
    }

   

    public function signup()
    {
        return view('prism/signup');
    }

    public function aboutus()
    {
        return view('prism/aboutus');
    }

    public function contactus()
    {
        return view('prism/contactus');
    }

    public function careers()
    {
        return view('prism/careers');
    }

    public function privacypolicy()
    {
        return view('prism/prevacypolicy');
    }

    public function homeloan()
    {
        return view('prism/homeloan');
    }

    public function renovation()
    {
        return view('prism/renovation');
    }

    public function legalservices()
    {
        return view('prism/legalservices');
    }
    public function userdash()
    {
        return view('prism/userdash');
    }
    public function propertydetails()
    {
        return view('prism/propertydetails');
    }
    public function addproperty()
    {
        return view('prism/addproperty');
    }
}
