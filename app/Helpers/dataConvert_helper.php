<?php
use App\Models\DataModel;

if ( ! function_exists('getName'))
{
    function getName($int = '',$sex = 'F',$lang='TH'){
        $Pt = new DataModel();
        $sr['table'] = 'tb_patient';
        $sr['where'] = ['id_hn' => $int];
        $data = $Pt->selectAll($sr);
        $data = $data[0];
        if($lang == 'TH'){
            if($sex == 'F'){
                if(empty($data['Pname'])) $data['Pname'] = 'คุณ';
                $fullname = $data['Pname'].$data['Fname'].' '.$data['Lname'];
            }else{
                if(empty($data['Pname2'])) $data['Pname2'] = 'คุณ';
                $fullname = $data['Pname2'].$data['Fname2'].' '.$data['Lname2'];
            }
        }else{
            if($sex == 'F'){
                $fullname = $data['Pname_en'].$data['Fname_en'].' '.$data['Lname_en'];
            }else{
                $fullname = $data['Pname_en2'].$data['Fname_en2'].' '.$data['Lname_en2'];
            }
        }
        return $fullname;
    }   
}


if ( ! function_exists('getDr'))
{
    function getDr($int = '',$lang='TH'){
        if(!empty($int)){
            $Pt = new DataModel();
            $sr['table'] = 'tb_doctor';
            $sr['where'] = ['id_doctor' => $int];
            $data = $Pt->selectAll($sr);
            $data = $data[0];
            if($lang == 'TH'){
                $fullname = $data['title_doc'].$data['fname_doc'].' '.$data['lname_doc'];
            }else{
                $fullname = $data['title_en'].$data['fname_en'].' '.$data['lname_en'];
            }
            return $fullname;
        }else{
            return '';
        }
    }   
}

?>