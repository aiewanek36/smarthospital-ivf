<?php
use App\Models\DataModel;


if ( ! function_exists('createRandom'))
{
    function createRandom(){
        $chars = "abcdefghijkmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        srand((double) microtime() * 1000000);
        $i = 0;
        $pass = '';
        while ($i <= 10) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
        return date('YmdHis').$pass;
    }   
}



if ( ! function_exists('genHN')){
    function genHN(){
        $Pt = new DataModel();
        $sr['table'] = 'tb_patient';
        $sr['order'] = 'HN';
        $sr['field'] = 'HN';
        $sr['where'] = 'HN LIKE "'.date('y').'%"';
        $sr['by'] = 'DESC';
        $sr['start'] = '0';
        $sr['limit'] = '1';
        $data = $Pt->selectAll($sr);
        $HN = $data[0]['HN'];
        if($HN<>'') {
            $num = substr($HN,2);
            $HN  = date('y').sprintf('%05d',(int)$num+1);
        }else{ 
            $HN = date('y').'00001'; 
        }

        return  $HN;
    }   
}



if ( ! function_exists('genVN')){
    function genVN(){
        $Pt = new DataModel();
        $sr['table'] = 'vn';
        $sr['order'] = 'id';
        $sr['field'] = 'vn_per_day';
        $sr['where'] = 'vn_per_day LIKE "'.date('ymd').'-%"';
        $sr['by'] = 'DESC';
        $sr['start'] = '0';
        $sr['limit'] = '1';
        $data = $Pt->selectAll($sr);
        $VN = $data[0]['vn_per_day'];
        if($VN<>'') {
            $num = substr($VN,-3,3);
            $VN  = date('ymd').'-'.sprintf('%03d',(int)$num+1);
        }else{ 
            $VN = date('ymd').'-001'; 
        }
        return $VN;
    }   
}

?>
