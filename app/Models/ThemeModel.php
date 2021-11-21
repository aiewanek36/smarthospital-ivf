<?php
namespace App\Models;

use CodeIgniter\Model;

class ThemeModel extends Model
{
    protected $table = 'tb_setting_bar';
    protected $allowedFields = ['*'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    public function getBar($type = null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_setting_bar')
                   ->distinct()
                   ->select('type,file_new_name as file');
        $query   = $builder->get();
        $results = $query->getResultArray();
        return $results;
    }
}
