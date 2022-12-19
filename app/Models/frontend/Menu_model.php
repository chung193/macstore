<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Menu_model extends Model
{
    protected $table = 'menu';
     
    public function getmenu($code)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('menu');
        $builder->select('menu.*, menu_item.json as json');
        $builder->join('menu_item', 'menu.id = menu_item.menu_id');
        $builder->where('menu.code', $code);
        $query = $builder->get();
        return $query->getRow();
    }
 
}