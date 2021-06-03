<?php 

class Students extends CI_Controller{
    
    public function index(){
        $this->load->view('register_and_login');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $this->load->model('Student'); // or you can autoload 
        $student = $this->Student->get_student_by_email($email);
        if($student && $student['password'] == $password)
        {
            $user = array(
                'student_id' => $student['id'],
                'student_email' => $student['email'],
                'student_first_name' => $student['first_name'],
                'student_last_name' => $student['last_name'],
                'is_logged_in' => true
            ); 
            $this->session->set_userdata('user', $user); 
            redirect('/students/profile');
        }
        else
        {
            $this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect("/students/index");
        }
    }

    public function profile()
    {
        if($this->session->userdata('user')['is_logged_in'] === true)
        {
            $this->load->view('profile_page');
        }
        else
        {
            redirect("/students/login");
        }
    }
    //logout the student
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());   
    }

    public function register(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');

        $password = md5($this->input->post('password'));
        $confirm_password = md5($this->input->post('confirm_password'));

        if($this->form_validation->run() === TRUE){
            $this->session->set_flashdata("login_valid", "Succesfully created an account");
            if($password === $confirm_password){ 
                $this->load->model('Student');
                $student_details = array(
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('confirm_password')),
                );    
                $create = $this->Student->register_user($student_details);
                
                if($create === TRUE){
                    $this->session->set_flashdata("login_valid", "Succesfully created an account");
                    redirect(base_url(), 'Students');
                    die();
                } else {
                    echo 'unable to create new user';
                }
            } else {
                    $this->session->set_flashdata('validation_errors', "Password not match");    
                    redirect(base_url(). 'Students');
                    die();
            }
        } else {
            $this->session->set_flashdata('validation_errors', validation_errors());    
                    redirect(base_url(). 'Students');
                    die();
        } 
    }
}

?>