<?php

Class Time extends CI_Controller
{
    public function main()
    {
        $today = date("F j, Y g:i A"); 
        $this->load->view('/main', ['time' => $today]);
    }
}