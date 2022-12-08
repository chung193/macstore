<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class NotificationsShow_model extends Model
{
    protected $table = 'noti_show';
     
    public function getNoti($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            $db      = \Config\Database::connect();
            $builder = $db->table($this->table);
            $builder->where('id', $id);
            $query = $builder->get();
            return $query->getRow();
        }   
    }

    public function getId($user_id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('noti_id');
        $builder->where('id_user', $user_id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function saveNotiShow($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function saveCategory($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateCategory($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteCategory($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }

    public function countWhere($slug){
        $query = $this->where(['slug' => $slug])->countAllResults();
        return $query;
    }
 
}