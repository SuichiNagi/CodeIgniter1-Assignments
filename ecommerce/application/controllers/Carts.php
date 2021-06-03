<?php

class Carts extends CI_Controller{
    public function index(){
        $this->load->model("Cart");
        $cart = $this->Cart->select_cart();
        $this->load->view('cart_view', array('carts' => $cart));
    }

    public function add($id){
            $this->load->model("Cart");
            $cart_details = array(
                "quantity" => $this->input->post('quantity'),
                "id" => $id
            );

            $add = $this->Cart->add_cart($cart_details);

            if($add){
                redirect(base_url(). 'Products');
            } else {
                echo 'error';
            }
    }

    public function delete($id){
        $this->load->model("Cart");
        $this->Cart->delete_cart($id);
        redirect('carts/index');
    }
}

?>