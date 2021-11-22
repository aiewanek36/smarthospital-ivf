<?php
namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{   
    public function selectAll($sr = null)
    {
        
        $db = db_connect();
        $bulider = $db->table($sr['table']);


        if(!empty($sr['field'])){
            $bulider->select($sr['field']);
        }

        if(!empty($sr['where'])){
            $bulider->where($sr['where']);
        }

        if(!empty($sr['limit'])){
            $bulider->limit($sr['limit'], $sr['start']);
        }

        if(($sr['order']<>'')&&($sr['by']<>'')){
            $bulider->orderBy($sr['order'],$sr['by']);
        }      
         
         $query = $bulider->get();
         $results = $query->getResultArray();
         return $results;
    }

    public function getSelectAll($sr = null){
        $db = db_connect();
        $bulider = $db->table($sr['table']);
       
        if(!empty($sr['where'])){
            $bulider->where($sr['where']);
        }
          
        $query = $bulider->get();
        $results = $query->getResultArray();
         
        $data = array();
        foreach($results as $row){
               $data[] = '<option value="'.$row[$sr["field"]].'">'.$row[$sr["field"]].'</option>';
        }
         return $data;
    }


    public function insertData($table = null,$data = null)
    {
        $db = db_connect();
        $builder = $db->table($table); 
        // $sql = $builder->set($data)->getCompiledInsert('mytable');
        $builder->insert($data);
        $id = $db->insertID();
        return $id;
    }

    public function updateData($where = null,$table = null,$data = null)
    {
        $db = db_connect();
        $builder = $db->table($table); 
        $builder->where($where)->set($data)->update();
        // $sql = $builder->set($data)->getCompiledUpdate('mytable');
        // echo $sql;
    }
}
