<?php

class Product extends CI_Model{
    function get_all_products()
     {
         return $this->db->query("SELECT * FROM product")->result_array();
     }
}

?>