<?php
$output_dir = $_GET['path'];
$new_name = date('YmdHis').Random().".";
if(isset($_FILES["myfile"])){
    $ret = array();
    $error =$_FILES["myfile"]["error"];
    if(!is_array($_FILES["myfile"]["name"])){
        $type = end(explode(".",$_FILES["myfile"]["name"]));
        $fileName = $_FILES["myfile"]["name"];//$new_name.$type;
        move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
        $ret[]= $fileName;
    }else{
        $fileCount = count($_FILES["myfile"]["name"]);
        for($i=0; $i < $fileCount; $i++){
            $type = end(explode(".",$_FILES["myfile"]["name"]));
            $fileName = $_FILES["myfile"]["name"];//$new_name.$type;
            move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
            $ret[] = $fileName;
        }
    }
    echo json_encode($ret);
}

function Random() {
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $result = '';
    while ($i <= 5) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $result = $result.$tmp;
        $i++;
    }
    return $result;
}
?>