<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ThemeModel;


class Dashboard extends Controller
{ 
    public function index($page = 'home'){
        // if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')){
        //     throw new \CodeIgniter\Exceptions\PageNoteFoundException($page);
        // }
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
        echo view('pages/'.$page);
        echo view('templates/footer', $data);
    }
    
    public function appointment(){
        if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNoteFoundException($page);
        }
        $session = session();
        $model = new ThemeModel();
        $theme = $model->getBar();
        foreach($theme as $key => $value){
           $data['theme'][$value['type']] = $value; 
        }
        $data['title']  = 'Welcome '.$session->get('name_user').' to '.ucfirst($page);
        echo view('templates/header', $data);
        echo view('templates/nav_bar', $data);
        echo view('pages/appoint/'.$page);
        echo view('templates/footer', $data);
    }

    public function active(){
        foreach($theme as $key => $value){
            $data['theme'][$value['type']] = $value; 
         }
         $data['title']  = 'Welcome '.$session->get('name_user').' to '.ucfirst($page);
         echo view('templates/header', $data);
         echo view('templates/nav_bar', $data);
         echo view('pages/appoint/'.$page);
         echo view('templates/footer', $data);
    }
}
