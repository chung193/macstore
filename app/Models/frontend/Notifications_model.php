<?php

namespace App\Models\frontend;

use CodeIgniter\Model;

class Notifications_model extends Model
{
    protected $table = 'noti';

    public function getNoti($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            $db      = \Config\Database::connect();
            $builder = $db->table($this->table);
            $builder->where('id', $id);
            $query = $builder->get();
            return $query->getRow();
        }
    }

    public function getNotiUnRead($id)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('noti.*');
        $builder->join('noti_status', 'noti_status.noti_id = noti.id', 'left');
        $builder->whereNotIn('noti.id', $id );
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function getNotiUnShow($id)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('noti.*');
        $builder->join('noti_show', 'noti_show.noti_id = noti.id', 'left');
        $builder->whereNotIn('noti.id', $id );
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function savenoti($data)
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

    public function countWhere($slug)
    {
        $query = $this->where(['slug' => $slug])->countAllResults();
        return $query;
    }
}
