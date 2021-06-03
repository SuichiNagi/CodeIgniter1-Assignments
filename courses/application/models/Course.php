<?php 

class Course extends CI_Model {
    function get_all_courses()
    {
        return $this->db->query("SELECT * FROM tbl_course")->result_array();
    }
    function get_course_by_id($course_id)
    {
        return $this->db->query("SELECT * FROM tbl_course WHERE id = ?", array($course_id))->row_array();
    }
    function add_course($course)
    {
        $query = "INSERT INTO tbl_course (course_name, description, created_at) VALUES (?,?,?)";
        $values = array($course['course_name'], $course['description'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }
    function delete_course($course_id)
    {
        $this->db->query("DELETE FROM tbl_course WHERE id = ?", array($course_id));
    }
}
    