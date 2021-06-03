<?php 

class Random extends CI_Controller{
    public function index(){
        $this->session->userdata('count');
        $this->session->set_userdata('count', $this->session->userdata('count')+1);

        $data = array(
            'count'=>$this->session->userdata('count'),
            'random'=>$this->random_gen()
        );

        $this->load->view('main', $data);
    }

    public function random_gen(){
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen( $chars );
        $arr = array();
        for( $i = 0; $i < 14; $i++ ) {
            $str= $chars[ rand( 0, $size - 1 ) ];
            $arr[] = $str;
        } 
        return $arr;
    }
}