<?php namespace App\Controllers\manage;

use CodeIgniter\Controller;
use App\Models\manage\Common_model;

class Test extends BaseController
{    
    function truncate(){
        $db = db_connect();
        $arr = ['tinhthanhpho', 'user', 'user_group', 'permission', 'options', 'info'];
        $tables = $db->listTables();
        $md = new Common_model();
        foreach ($tables as $table) {
            //echo $table;
            //echo '<br>';
            if(!in_array($table, $arr)){
                $md->empty($table);
            }
        }
    }

}