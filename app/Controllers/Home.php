<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        // return view('intro');
        return view('\App\Views\intro.php');
    }


}
