<?php 

class Users extends CI_Controller{

    public function index()
	{
		$this->load->view('index');
	}

    public function new()
    {
        $this->load->view('new');
    }

    public function create(){
        redirect('/users');
    }

    public function count(){
        //$counter = file_get_contents('/users/count') + 1;
        //file_put_contents('/users/count', $counter);

        //echo "You visited the page ". $counter ." times";
    }

    public function say($shout, $number)
    {
        $this->load->view('say', ['shout' => $shout, 'count' => $number]);
    }

    public function mprep()
    {
          $view_data = array(
              'name' => "Michael Choi",
              'age'  => 40,
              'location' => "Seattle, WA",
              'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
          );    
          $this->load->view('mprep', $view_data);
    }
}

?>