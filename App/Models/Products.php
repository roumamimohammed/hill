<?php 




class Products
{
    private $db;
    private $table = "products";
    private $tab="admin";

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getAllProducts()
    {
        
        return $this->db->connect()->get($this->table);
    }
    public function getAlladmin($email,$password)
    {
        
       
        $admin = $this->db->connect()->where('email', $email);
        $admin = $this->db->connect()->where('password', $password);
        return $admin->get($this->tab);
    }


    /**
     * insert new product in db
     * @param array $data => fileds and values of product row 
     */
    public function insertProducts($data)
    {
        return $this->db->connect()->insert($this->table,$data);
    }


    /**
     * delete product from db 
     * @param int $id => id of product 
     */
    public function deleteProduct($id)
    {
         return $this->db->connect()->where('id',$id)->delete($this->table);
    }


    /**
     * get data of product from database
     * @param int 
     * @return array 
     */

    public function getProduct($id)
    {
        $product = $this->db->connect()->where('id', $id);
        return $product->get($this->table);
    }

    public function updateProduct($id,$data)
    {
        $product = $this->db->connect()->where('id', $id);
        return $product->update($this->table,$data);
    }
}