<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FavouritesModel;

class Favourites extends BaseController
{
    public function index()
    {
        $model = new FavouritesModel();
        $data['favouritelist'] = $model->get();
        $data = array_merge($this->global, $data);
        return view('admin/favourites', $data);
    }
    public function delete($property_id,$email)
    {
        $session = session();    
        $model = new FavouritesModel();
        $result = $model->erase($property_id,$email);
        if($result == null) {
            return redirect()->to('public/admin/favourites');
        }
        else {
            // $session->setFlashdata('msg', $result);
            $data['favouritelist'] = $model->get();
            $data = array_merge($this->global, $data);
            return view('admin/favourites', $data);
        }
    }
}
