<?php

class Cart extends CI_Model{
    function select_cart(){
        return $this->db->query(
            "SELECT cart.id, product.description, cart.quantity, cart.price 
            FROM cart
            INNER JOIN product ON product.id = cart.product_id ORDER BY cart.id ASC"
        )->result_array();
    }

    function add_cart($product){
        $query = 'INSERT INTO cart(quantity, price, product_id) SELECT ?, price*?, ? FROM product WHERE id = ?';
        $values = array($product['quantity'], $product['quantity'], $product['id'], $product['id']);
        return $this->db->query($query, $values);
    }

    function delete_cart($cart_id){
        $this->db->query("DELETE FROM cart WHERE id = ?", array($cart_id));
    }
}

?>