<?php 

class Main extends CI_Controller {
    public function world(){
        $this->load->view('/main/world');
    }

    public function ninjas($number){
        
        $this->load->view('/main/ninjas', ['count' => $number]);
    }
}

?>