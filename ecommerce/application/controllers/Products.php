<?php 

class Products extends CI_Controller{
    public function index(){
        $this->load->model("Product"); //loads the model
        $product = $this->Product->get_all_products();  //calls the get_course_by_id method
        $this->load->view('product_view', array('product' => $product));
    }
}