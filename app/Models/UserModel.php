<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
   protected $table = 'admintrator';
   protected $allowedFields = ['id_admin','usern','passw','type','name','licensed','position','pic','type_lab','branch','re_order','cancel'];
}
