<?php

namespace App\Models\manage;

use CodeIgniter\Model;

class Shop_Product_model extends Model
{
    protected $table = 'shop_product';


    public function getshopproduct($id = false)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);

        if ($id === false) {
            $builder->select('shop_product.*');
            $builder->orderBy('id', 'DESC');
            $query = $builder->get();
            return $query->getResultArray();
        } else {
            $builder->select('shop_product.*, shop_category.title as catname');
            $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
            $builder->where('shop_product.id', $id);
            $query = $builder->get();
            return $query;
        }
    }

    public function getshopproductbycat($cat)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('shop_product.*, shop_category.title as catname');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->where('shop_category.title', $cat);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getshopproductbyproducer($producer)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('shop_product.*, shop_category.title as catname');
        $builder->join('shop_category', 'shop_category.id = shop_product.category_id');
        $builder->join('shop_producer', 'shop_product.producer_id = shop_producer.id');
        $builder->where('shop_producer.name', $producer);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function countWhere($slug)
    {
        $query = $this->where(['slug' => $slug])->countAllResults();
        return $query;
    }

    public function countAll()
    {
        $query = $this->db->table($this->table);
        return $query->countAll();
    }

    public function all()
    {
        $query = $this->db->table($this->table);
        return $query->getResultArray();
    }


    public function saveshopproduct($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateshopproduct($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function moveTrash($id)
    {
        $builder = $this->db->table($this->table);
        $data = [
            'trash'  => 1,
            'published' => 0
        ];

        $builder->where('id', $id);
        $builder->update($data);
    }

    public function Restore($id)
    {
        $builder = $this->db->table($this->table);
        $data = [
            'trash'  => 0,
            'published' => 1
        ];

        $builder->where('id', $id);
        $builder->update($data);
    }

    public function deleteshopproduct($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}
