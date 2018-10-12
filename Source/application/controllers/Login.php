<?php

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('LoginSignup.php');
	}

    //Login
    public function login_data()
    {
                
        if($this->input->post('submit_Login'))
        {
            $data = array(
                $email = $this->input->post('login_email') ,
                $password = $this->input->post('login_password')
            );

            $this->load->model('LoginSignup_model');
            $result = $this->LoginSignup_model->can_login($data);

            if($result)
            {
                $this->load->view('Login_success.php');
            }
            else
            {
                $this->load->view('Login_fail.php');
            }
        }   

        else
            {
                $this->load->view('Login_fail.php');
            }
    }          
}
?>