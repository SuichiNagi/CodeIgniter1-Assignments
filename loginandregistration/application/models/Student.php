<?php

class Student extends CI_Model{
    function get_student_by_email($email)
    { 
        $query = 'SELECT * FROM users WHERE email = ?';
        $values = array($email);
        return $this->db->query($query, $values)->row_array();
    }

    function register_user($user)
    {
        $query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES (?,?,?,?,?)";
        $values = array($user['first_name'], $user['last_name'], $user['email'], 
                $user['password'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }
 }

?>