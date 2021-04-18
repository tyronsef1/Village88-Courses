<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
	public function index()
	{
		// $this->output->enable_profiler(TRUE); //enables the profiler
        $this->load->model("Course"); //loads the model
        $course['courses'] = $this->Course->get_all_courses();  //calls the get_course_by_id method
		$this->load->view('courses/add_course.php', $course);
	}
    public function add()
    {
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "required|min_length[5]");
		if($this->form_validation->run() === FALSE)
		{
			 $this->view_data["errors"] = validation_errors();
			 echo validation_errors();
		}
		else
		{
			$this->load->model("Course");
			$course_details = array(
				"title" => $this->input->post('name'),
				"description" => $this->input->post('description')
			); 
			$add_course = $this->Course->add_course($course_details);
			if($add_course === TRUE) {
				redirect('courses');
			}
		}
    }
}