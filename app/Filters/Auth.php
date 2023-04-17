<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // echo '<pre>'; print_r(session()); echo '</pre>';
        if(!session()->get('logged_in')){
            // echo 'logged in';exit;
            // then redirct to login page
            return redirect()->to('/public/login'); 
        }
    }
    //--------------------------------------------------------------------
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}