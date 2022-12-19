<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Common_model extends Model
{
    public function empty($table){
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->truncate();
    }
 
}