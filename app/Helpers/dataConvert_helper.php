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
            if($data['Fname'] != ''){
                if(empty($data['Pname'])) $data['Pname'] = 'คุณ';
                $fullname = $data['Pname'].$data['Fname'].' '.$data['Lname'];
            }else{
                $fullname = $data['Pname_en'].$data['Fname_en'].' '.$data['Lname_en'];
            }
        }else{
            if($data['Fname_en'] != ''){
                $fullname = $data['Pname_en'].$data['Fname_en'].' '.$data['Lname_en'];
            }else{
                $fullname = $data['Pname'].$data['Fname'].' '.$data['Lname'];
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



if ( ! function_exists('UPimageData'))
{
    function UPimageData($path = null,$data = null){
        $pathCHK = substr(base_url().$path,0,-1);
         if (!file_exists($pathCHK)) {
             mkdir($pathCHK,0777);
         }
        $Random = createRandom();
        $imageData = $data;
        $filteredData = substr($imageData, strpos($imageData, ",")+1);
        $unencodedData = $filteredData;
        $img_name = $Random.'.png';
        helper('filesystem');
        write_file(FCPATH.$path.$img_name, base64_decode($unencodedData));
        return $path.$img_name;
    }   
}

?>