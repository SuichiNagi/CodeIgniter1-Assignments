<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index(){
		$this->load->model('product');
		$products = $this->product->get_all_products();
		
		$this->load->view('products', array('products'=>$products));
	}
	
	public function new(){
		$this->load->view('new');
	}

	public function create(){
		$this->load->model('product');

		$product_details = array(
			'name'=>$this->input->post('name'),
			'description'=>$this->input->post('description'),
			'price'=>$this->input->post('price')
		);

		$add_product = $this->product->add_product($product_details);
		redirect(base_url().'products');
		die();
		// $error = $this->session->userdata('error');

		// if($this->input->post('name') == null){	
		// 	$error['name'] = '*required!';
		// }

		// if($this->input->post('price') == null){
		// 	$error['price'] = '*required!';
		// }else if(!is_numeric($this->input->post('price'))){
		// 	$error['price'] = '*invalid!';
		// }
		
		// $this->session->set_userdata('error', $error);
		// $this->load->model('product');
		
		// if(count($error) <= 0){
			

		// 	echo 'mm';
		// }else{
		// 	echo '0';
		// 	// redirect(base_url().'products/new');
		// 	// die();
		// }	
	}

	public function show($id){
		$this->load->model('product');
		$product_details = $this->product->get_product_by_id($id);

		$this->load->view('info', array('product'=>$product_details));
	}

	public function edit($id){
		$this->load->model('product');
		$product_detail = $this->product->get_product_by_id($id);
		
		$this->load->view('edit', array('product'=>$product_detail));

	}

	public function update($id){
		$this->load->model('product');

		$product_details = array(
			'id'=>$id,
			'name'=>$this->input->post('name'),
			'description'=>$this->input->post('description'),
			'price'=>$this->input->post('price')
		);

		$update = $this->product->update_product($product_details);
		redirect(base_url().'products');
		die();
	}

	public function destroy($id){
		$this->load->model('product');
		$this->product->remove_product($id);
		redirect(base_url().'products');
		die();
	}
	
}



