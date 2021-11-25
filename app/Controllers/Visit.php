<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ThemeModel;
use App\Models\DataModel;

class Visit extends Controller
{ 
    protected $helpers = ['dataConvert','generate','form','date','html'];

    public function index($page = 'all'){
        if (!is_file(APPPATH.'/Views/patient/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNoteFoundException($page);
        }
        $session = session();
        
        $model = new ThemeModel();
        $theme = $model->getBar();
        foreach($theme as $key => $value){
           $data['theme'][$value['type']] = $value; 
        }
        //$page = '/'.current_url(true)->getSegment(2);
        $uri = current_url(true);
        // $uri->getTotalSegments();
        $module = '/'.current_url(true)->getSegment(1);
        echo view('templates/header', $data);
        echo view('templates/nav_bar', $data);
        echo view('patient/'.$page);
        echo view('templates/footer', $data);
    }
}