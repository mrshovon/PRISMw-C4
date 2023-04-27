<?php namespace App\Filters;

use CodeIgniter\Router;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // echo '<pre>'; print_r($request->uri->getSegment(1)); echo '</pre>';
        // echo '<pre>'; print_r(session()->get()); echo '</pre>';
        if(!session()->get('logged_in')){
            // echo 'logged in';exit;
            // then redirct to login page
            return redirect()->to('/public/login'); 
        }
        else{
            if(session()->get('user_type') == 'customer' && $request->uri->getSegment(1) != 'user') {
                return redirect()->to('/public/login'); 
            }
            else if(session()->get('user_type') == 'administrator' && $request->uri->getSegment(1) != 'admin') {
                return redirect()->to('/public/login'); 
            }
        }
    }
    //--------------------------------------------------------------------
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}