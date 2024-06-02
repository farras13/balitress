<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('log') == null) {
		// 	redirect('Auth');
		// }
		$this->load->model('M_basic', 'm');
	}
	public function index()
	{
		$this->load->view('login');
	} 

	public function pros_login(){
		$data = array(
			'email' => $this->input->post('reqemail'),
			'password' => md5($this->input->post('reqpassword'))
		);
		$cek = $this->m->getData('users', $data);
		
		if($cek){
			$session_data = array(
				'user_id' => $cek->row()->id,
				'username' => $cek->row()->fullname,
				'log' => TRUE
			);
			$this->session->set_userdata($session_data);
			return redirect('Admin','refresh');
		}else{
			
			return redirect('Login','refresh');
		}
	}
	
	public function register()
	{
		$this->load->view('register');
	}

	public function pros_register()
	{
		$this->form_validation->set_rules('reqemail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('reqfullname', 'Full Name', 'required');
        $this->form_validation->set_rules('reqdatebirth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('reqpassword', 'Password', 'required|min_length[6]');
       
		$data = array(
			'email' => $this->input->post('reqemail'),
			'fullname' => $this->input->post('reqfullname'),
			'born_date' => $this->input->post('reqdatebirth'),
			'password' => md5($this->input->post('reqpassword'))
		);

		// Insert or update the data in the database
		$this->m->ins($data, "users");
        
		$cek = $this->m->getData('users', $data);
		if($cek){
            $this->session->set_flashdata('message', 'Gagal Melakukan Register!');

			return redirect('Login','refresh');
		}else{
			return redirect('Register','refresh');
		}
	}

	public function logout(){
		$this->session->unset_userdata(array('user_id', 'username', 'log'));
		return redirect('Login','refresh');
	}
}