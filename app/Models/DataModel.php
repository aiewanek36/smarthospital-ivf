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

        if(!empty($sr['join'])){
            foreach($sr['join'] as $key => $val){ 
                $bulider->join($key,$val,'left');
            }
        }

        if(($sr['order']<>'')&&($sr['by']<>'')){
            $bulider->orderBy($sr['order'],$sr['by']);
        }      
         
         $query = $bulider->get();
         $results = $query->getResultArray();
         $builder =  $bulider->getCompiledSelect('test');
        
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
        $data[] = '<option value="">Select</option>';
        foreach($results as $row){
            $id = $row[$sr['field']];
            if(!empty($sr['func'])){  $row[$sr["name"]] = $sr['func']($row[$sr["name"]]); }
            $data[] = '<option  value="'.$id.'">'.$row[$sr["name"]].'</option>';
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
