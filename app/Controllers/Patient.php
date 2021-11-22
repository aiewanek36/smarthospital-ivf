<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ThemeModel;
use App\Models\DataModel;

class Patient extends Controller
{ 
    protected $helpers = ['dataConvert','generate','form','html'];
    

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
        
        //$page = '/'.current_url(true)->getSegment(2);
        $uri = current_url(true);
        // $uri->getTotalSegments();
        $module = '/'.current_url(true)->getSegment(1);
        echo view('templates/header', $data);
        echo view('templates/nav_bar', $data);
        $Pt = new DataModel();
        $sr['table'] = 'tb_patient';
        if($page == 'all'){
             $data['goto'] = 1;
             $data['results'] = $Pt->selectAll($sr);
        }
        echo view('patient/'.$page, $data);
        echo view('templates/footer', $data);
    }

    public function profile(){
        $session = session();
        
        $model = new ThemeModel();
        $theme = $model->getBar();
        foreach($theme as $key => $value){
           $data['theme'][$value['type']] = $value; 
        }
        $uri = current_url(true);
        $id = $uri->getSegment(3);
        echo view('templates/header', $data);
        echo view('templates/nav_bar', $data);
        $Pt = new DataModel();
        $sr['table'] = 'tb_patient';
        $sr['where'] = array('id_hn =' => $id);
        $data['patient'] = $Pt->selectAll($sr);
        echo view('patient/profile', $data);

        if($data['patient'][0]['spouse'] <> ''){
            $sr2['table'] = 'tb_patient';
            $sr2['where'] = array('id_hn =' => $data['patient'][0]['spouse']);
            $data2['spouse'] = $Pt->selectAll($sr2);
            echo view('patient/view_profile', $data2);
        }
        
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
             return redirect()->back()->withInput($id); 
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
