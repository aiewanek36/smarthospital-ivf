<?php


namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ThemeModel;
use App\Models\DataModel;

define('BASEPATH', str_replace("\\", "/", $system_path)) OR exit('No direct script access allowed');
error_reporting(1);
class Patient extends Controller
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

    public function view($page = 'all'){
        if (!is_file(APPPATH.'/Views/patient/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNoteFoundException($page);
        }
        $session = session();
        
        $model = new ThemeModel();
        $theme = $model->getBar();
        foreach($theme as $key => $value){
           $data['theme'][$value['type']] = $value; 
        }

        $router = \Config\Services::router();
        $_method = 
        
        $data['_method'] = $router->methodName();
        $data['_controller'] = current_url(true)->getSegment(3);
        $data['_params'] = $router->params();
        // $page = current_url(true)->getSegment(3);
        // $uri = current_url(true);
        echo view('templates/header', $data);
        echo view('templates/nav_bar', $data);
        $Pt = new DataModel();
        if($page=='all'){
             $sr['table'] = 'tb_patient';
             $search = array();
             $search[] = '1=1';
             if($this->request->getVar('search_date')<>''){
                 $d1 = $this->request->getVar('d1');
                 $d2 = $this->request->getVar('d2');
                 $search[] = "DATE(DateIn) BETWEEN '".$d1."'  AND '".$d2."'";
             }
             if($this->request->getVar('s_text')<>''){
                 $var = $this->request->getVar('s_text');
                 $search[] = "CONCAT(HN,' ',Fname,' ',Fname_en,' ',Lname,' ',Lname_en,' ',Telephone,' ',PersonalID,' ',PassportNumber) LIKE '%$var%'";
             }
             $sr['where'] = implode($search,' AND ');
         }else if($page=='active'){
            $sr['table'] = 'vn as a';
            $sr['join']['tb_patient as b'] = 'a.id_hn = b.id_hn';
            $sr['field'] = 'a.*,b.HN,b.PatientType,b.status_room';
            $search = array();
            $search[] = 'b.id_active <> ""';
            if($this->request->getVar('search_date')<>''){
                $d1 = $this->request->getVar('d1');
                $d2 = $this->request->getVar('d2');
                $search[] = "DATE(a.vn_date_start) BETWEEN '".$d1."'  AND '".$d2."'";
            }
            if($this->request->getVar('s_text')<>''){
                $var = $this->request->getVar('s_text');
                $search[] = "CONCAT(b.HN,b.Fname,' ',b.Fname_en,' ',b.Lname,' ',b.Lname_en,' ',b.Telephone,' ',b.PersonalID,' ',b.PassportNumber) LIKE '%$var%'";
            }
            $sr['where'] = implode($search,' AND ');
         }
         $data['goto'] = 1;
         $data['results'] = $Pt->selectAll($sr);
         echo view('patient/'.$page, $data);
         echo view('templates/footer', $data);
    }

    public function profile($id=null){
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


        echo view('patient/profile', $data);
        echo $data2['spouse'][0]['id_hn'] <> '' ? view('patient/view_profile', $data2) : '';
        echo view('templates/footer', $data);
    }

    public function view_profile($id=null){
        $Pt = new DataModel();
        $sr['table'] = 'tb_patient';
        $sr['where'] = array('id_hn =' => $id);
        $data['profile'] = $Pt->selectAll($sr);
    }



    public function add(){
        $Pt = new DataModel();
        $table = 'tb_patient';
        $id = $this->request->getVar('id_hn');
        $picture = $this->request->getVar('name_pic');
        $exp = substr($picture,0,4);
        if ($exp=='data' && $picture!=''){
            $picture = UPimageData('/assets/picture/',$picture);
        }else{
            $picture = $this->request->getVar('picture');
        }
        $data = [
            'picture' => $picture,
            'id_facebook' => $this->request->getVar('id_facebook'),
            'id_wechat' => $this->request->getVar('id_wechat'),
            'id_line' => $this->request->getVar('id_line'),
            'doctor' => $this->request->getVar('doctor'),
            'Pname_en' => $this->request->getVar('Pname_en'),
            'Fname_en' => $this->request->getVar('Fname_en'),
            'Lname_en' => $this->request->getVar('Lname_en'),
            'Pname' => $this->request->getVar('Pname'),
            'Fname' => $this->request->getVar('Fname'),
            'Lname' => $this->request->getVar('Lname'),
            'PersonalID' => $this->request->getVar('PersonalID'),
            'PassportNumber' => $this->request->getVar('PassportNumber'),
            'Nationality' => $this->request->getVar('Nationality'),
            'Race' => $this->request->getVar('Race'),
            'Bday' => $this->request->getVar('Bday'),
            'Mday' => $this->request->getVar('Mday'),
            'Yday' => $this->request->getVar('Yday'),
            'Telephone' => $this->request->getVar('Telephone'),
            'Email' => $this->request->getVar('Email'),
            'Address' => $this->request->getVar('Address'),
            'district' => $this->request->getVar('district'),
            'sub_district' => $this->request->getVar('sub_district'),
            'province' => $this->request->getVar('province'),
            'zipcode' => $this->request->getVar('zipcode'),
            'Note' => $this->request->getVar('Note'),
            'underlying' => $this->request->getVar('underlying'),
            'drug_allergy' => $this->request->getVar('drug_allergy'),
        ];
         if(empty($id)){
           $HN = $this->request->getVar('HN');
           if(empty($HN)){ $HN = genHN();}
            $data = array_merge($data, array(
            'DateIn' => $this->request->getVar('DateIn'),
            'HN' => $HN,
            'PatientType' => $this->request->getVar('PatientType'),
            ));
            $id =  $Pt->insertData($table,$data);
            return redirect()->to(site_url('patient/profile/'.$id)); 
         }else{
            $where = array('id_hn =' => $id);
            $Pt->updateData($where,$table,$data);
            $button = $this->request->getVar('button');
            
             if($button == 'Save'){
                $link = redirect()->back()->withInput($id); 
             }else if($button == 'Send'){
                $table_vn = 'vn';
                $vn_per_day = genVN();
                $id_hn = sprintf("%05d",$this->request->getVar('id_hn'));
                $spouse = sprintf("%05d",$this->request->getVar('id_spouse'));
                $VN = $id_hn.$spouse.date('ymdHis');
                
                if($this->request->getVar('send_f')=='f'){
                    $data_vn = [
                        'id_hn' => $this->request->getVar('id_hn'),
                        'spouse' => $this->request->getVar('spouse'),
                        'id_act' => $VN, 
                        'vn_date_start' => date('Y-m-d H:i:s'),
                        'vn_per_day' => $vn_per_day,
                        'id_doctor' => $this->request->getVar('doctor_f'),
                        'doctor' => getDr($this->request->getVar('doctor_f')),
                        'detail' => $this->request->getVar('detail_f'),
                    ];
                    $id =  $Pt->insertData($table_vn,$data_vn);
                    $where = array('id_hn =' => $this->request->getVar('id_hn'));
                    $data = [
                        'id_active' => $VN, 
                        'status_room' => 'Nurse',
                    ];
                    $Pt->updateData($where,$table,$data);
                    
                }
                if($this->request->getVar('send_m')=='m'){
                    $data_vn2 = [
                        'id_hn' => $this->request->getVar('spouse'),
                        'spouse' => $this->request->getVar('id_hn'),
                        'id_act' => $VN, 
                        'vn_date_start' => date('Y-m-d H:i:s'),
                        'vn_per_day' => $vn_per_day,
                        'id_doctor' => $this->request->getVar('doctor_m'),
                        'doctor' => getDr($this->request->getVar('doctor_m')),
                        'detail' => $this->request->getVar('detail_m'),
                    ];
                    $id2 =  $Pt->insertData($table_vn,$data_vn2);
                    $where = array('id_hn =' => $this->request->getVar('spouse'));
                    $data = [
                        'id_active' => $VN, 
                        'status_room' => 'Nurse',
                    ];
                    $Pt->updateData($where,$table,$data);
                }
                $link = redirect()->to('patient/view/active'); 
             }

             return $link;
         }
       
    }

    public function DataArray(){
            $Pt = new DataModel();
            $sr['table'] = $this->request->getVar('table');
            $sr['field'] = $this->request->getVar('field');
            $sr['name'] = $this->request->getVar('name'); 
            $sr['func'] = $this->request->getVar('func'); 
            $sr['where'] = $this->request->getPost('where');
            $response = $Pt->getSelectAll($sr);
            echo json_encode($response);
    }
}
