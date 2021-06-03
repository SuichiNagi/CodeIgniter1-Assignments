<?php 

class Courses extends CI_Controller{
        public function add()
        {
            $this->load->model("Course");
            $course_details = array(
                "course_name" => $this->input->post('course_name'),
                "description" => $this->input->post('description')
            ); 
            $add_course = $this->Course->add_course($course_details);
            redirect('/');
        }

        public function destroy($id){
            $this->load->model("Course");
            $course_details = $this->Course->get_course_by_id($id);
            $this->load->view('confirmation', array('course_details' => $course_details));
        }

        public function remove($id){
            $this->load->model("Course");
            $this->Course->delete_course($id);
            redirect(base_url());
        }
    
    public function index(){
        $this->output->enable_profiler(TRUE); //enables the profiler
        $this->load->model("Course"); //loads the model
        $course = $this->Course->get_all_courses();  //calls the get_course_by_id method
        $this->load->view('main', array('course' => $course));
    }
}