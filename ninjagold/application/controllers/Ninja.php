<?php

class Ninja extends CI_Controller{
    public function process_money(){
        $this->session->userdata('logs');
        $this->session->userdata('score');
        $logs = array();
        $date = date('F d, Y');
        $time = date('h:i A');

        if($this->input->post('farm_gold') == 'farm'){
            $earned = rand(10, 20);

            $score = $this->session->userdata('score');
            $this->session->set_userdata('score', $score+$earned);
            $this->session->userdata('score');

            $logs = $this->session->userdata('logs');
            $logs[] = "<span class='p1'>You entered a farm and earned ".$earned." golds. ($date  $time)<span>";
            $this->session->set_userdata('logs', $logs);

            redirect('/');
    }else if($this->input->post('cave_gold') == 'cave'){
            $earned = rand(5, 10);

            $score = $this->session->userdata('score');
            $this->session->set_userdata('score', $score+$earned);
            $this->session->userdata('score');

            $logs = $this->session->userdata('logs');
            $logs[] = "<span class='p1'>You entered a cave and earned ".$earned." golds. ($date $time)<span>";
            $this->session->set_userdata('logs', $logs);

            redirect('/');
    }else if($this->input->post('house_gold') == 'house'){
            $earned = rand(2, 5);

            $score = $this->session->userdata('score');
            $this->session->set_userdata('score', $score+$earned);
            $this->session->userdata('score');

            $logs = $this->session->userdata('logs');
            $logs[] = "<span class='p1'>You entered a house and earned ".$earned." golds. ($date $time)<span>";
            $this->session->set_userdata('logs', $logs);

            redirect('/');
    }else if($this->input->post('casino_gold') == 'casino'){
            $earned = rand(0, 50);

            $score = $this->session->userdata('score');

            $logs = $this->session->userdata('logs');
            $win_take = rand(0, 1);

            if($win_take == 0){

                $this->session->set_userdata('score', $score+$earned);
                $logs[] = "<span class='p1'>You entered a casino and earned ".$earned." golds. ($date $time)<span>";

            }else{

                $this->session->set_userdata('score', $score-$earned);
                $logs[] = "<span class='p2'>You entered a farm and lost ".$earned." golds... Ouch.. ($date $time)<span>";
            }

            $this->session->userdata('score');
            $this->session->set_userdata('logs', $logs);

            redirect('/');
        }
    }

    public function reset(){
        $this->session->unset_userdata('logs');
        $this->session->unset_userdata('score');
        redirect('/');
    }

    public function index(){
        $this->load->view('ninja_gold');
    }
}