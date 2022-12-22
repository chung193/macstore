<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Popup_model extends Model
{
    protected $table = 'popup';
    
     
    public function getPopup($id = false)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        
        if($id === false){
            $builder->orderBy('id', 'DESC');
            $query = $builder->get();
            return $query->getResultArray();
        }else{
            $builder->where('Popup.id', $id);
            $query = $builder->get();
            return $query;
        }   
    }

    
 
    public function savePopup($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePopup($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }


    public function deletePopup($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}