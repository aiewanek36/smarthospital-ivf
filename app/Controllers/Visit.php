<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ThemeModel;
use App\Models\DataModel;

class Visit extends Controller
{ 
    protected $helpers = ['dataConvert','generate','form','date','html'];

    public function index($page = 'vital_sign'){
        if (!is_file(APPPATH.'/Views/visit/'.$page.'.php')){
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
        echo view('visit/'.$page);
        echo view('templates/footer', $data);
    }


    public function view($page = 'vital_sign',$id = null){
        
        $router = \Config\Services::router();
        
        $data['_method'] = $router->methodName();
        $data['_controller'] = current_url(true)->getSegment(3);
        $data['_params'] = $router->params();
        $page = $data['_params'][0];
        $id = $data['_params'][1];

        if (!is_file(APPPATH.'/Views/visit/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNoteFoundException($page);
        }
        $session = session();
        
        $model = new ThemeModel();
        $theme = $model->getBar();
        foreach($theme as $key => $value){
           $data['theme'][$value['type']] = $value; 
        }
        
        $uri = current_url(true);
        echo view('templates/header', $data);
        echo view('templates/nav_bar', $data);
        echo $this->request->getVar('d1');
        $Pt = new DataModel();
        $sr['table'] = 'tb_patient as a';
        $sr['join']['vn as b'] = 'a.id_hn = b.id_hn';
        $sr['field'] = 'a.*,b.vn_per_day';
        $sr['where'] = array('a.id_hn =' => $id);
        $data['patient'] = $Pt->selectAll($sr);
        $spouse = $Pt->getRow('tb_patient',array('id_hn='=>$data['patient'][0]['spouse'],'id_active<>'=>""));
        
        $spouse == '0' && $data['patient'][0]['id_active'] <> '' ? $data['patient'][0]['spouse'] = '' : '';
        // Check Send VN Couple or Single
        if($data['patient'][0]['spouse'] <> ''){
            $sr2['table'] = 'tb_patient as a';
            $sr2['join']['vn as b'] = 'a.id_hn = b.id_hn';
            $sr2['field'] = 'a.*,b.vn_per_day';
            $sr2['where'] = array('a.id_hn =' => $data['patient'][0]['spouse']);
            $data2['spouse'] = $Pt->selectAll($sr2);
        }


        echo view('visit/'.$page, $data);
        echo $data2['spouse'][0]['id_hn'] <> '' ? view('visit/view_vital_sign', $data2) : '';
        echo view('templates/footer', $data);
    }


}