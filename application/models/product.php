<?php

class Product extends CI_Model {

    public function get_all_products(){
        return $this->db->query("SELECT * FROM products")->result_array();
    }

    public function add_product($products){
        $query = "INSERT INTO products(name, description, price) VALUES (?,?,?)";
        $values = array($products['name'], $products['description'], $products['price']); 
        return $this->db->query($query, $values);
    }
    
    public function get_product_by_id($product_id){
        return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
    }
    
    public function update_product($product_id){
        $query = "UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?";
        $values = array($product_id['name'], $product_id['description'], $product_id['price'], $product_id['id']);
        return $this->db->query($query, $values);
    }

    public function remove_product($product_id){
        $this->db->query("DELETE FROM products WHERE id = ?", array($product_id));
    }
}
?>