<?php

class Signup extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('LoginSignup.php');
	}

    //Signup
    public function enter_data()
     {

        if($this->input->post('submit_Signup'))
        {
            $this->load->model('LoginSignup_model');
            
            $data = array(

                'First_name' => $this->input->post('signup_fname'),
                'Last_name' => $this->input->post('signup_lname'),
                'Designation' =>$this->input->post ('signup_designation'),
                'Department' => $this->input->post('signup_department'),
                'Email' => $this->input->post('signup_email'),
                'Password' => $this->input->post('signup_password')
            );

            $this->LoginSignup_model->save_record($data);
            $this->load->view('Register_success.php');

       }
    }

}
?>