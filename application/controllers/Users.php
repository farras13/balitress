<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
		if ($this->session->userdata('log') == null) {
			redirect('Login');
		}
		$this->load->model('M_basic', 'm');
    }
	public function index()
	{
        $data["users"] = $this->m->getData("users")->result();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/users/index',$data);
		$this->load->view('admin/footer');
	}

    public function add()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/users/create');
		$this->load->view('admin/footer');
	}

    public function edit($id)
	{
        $data["users"] = $this->m->getData("users", ["id" => $id])->row();
		$this->load->view('admin/header');
		$this->load->view('admin/users/create');
		$this->load->view('admin/footer');
	}

    public function create(){
        $fullname = $this->input->post("first_name") . " " . $this->input->post("last_name");
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
        $config['max_size'] = 5120;
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('image'))
        {
            $data['upload_error'] = $this->upload->display_errors();
            $this->load->view('admin/users/create', $data);
        }
        else
        {
            $upload_data = $this->upload->data();
            $thumbnail_path = 'uploads/' . $upload_data['file_name'];
        }
        $data = [
            "first_name" => $this->input->post("first_name"),
            "last_name" => $this->input->post("last_name"),
            "email" => $this->input->post("email"),
            "password" => md5($this->input->post("password")),
            "fullname" => $fullname,
            "born_date" => $this->input->post("born_date"),
            "is_actived" => 1,
            "profile_picture" => $thumbnail_path
        ];
        $this->m->ins("users", $data);
        redirect("admin/users");
    }

    public function update($id){
        $user = $this->m->getData("users", ["id" => $id])->row();
        $fullname = $this->input->post("first_name") . " " . $this->input->post("last_name");
       
        if (!empty($_FILES['image']['name']))
        {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
            $config['max_size'] = 5120;
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('image'))
            {
                $data['upload_error'] = $this->upload->display_errors();
                $this->load->view('admin/users/create', $data);
            }
            else
            {
                $upload_data = $this->upload->data();
                $thumbnail_path = 'uploads/' . $upload_data['file_name'];
            }
        }
        else
        {
            $thumbnail_path = $user->image;
        }

        if($user->password == md5($this->input->post("password"))){
            $pass = $user->password;
        }else{
            $pass = md5($this->input->post("password"));
        }
       
        $data = [
            "first_name" => $this->input->post("first_name"),
            "last_name" => $this->input->post("last_name"),
            "email" => $this->input->post("email"),
            "password" => $pass,
            "fullname" => $fullname,
            "born_date" => $this->input->post("born_date"),
            "is_actived" => 1,
            "profile_picture" => $thumbnail_path
        ];
        $this->m->upd("users", $data, ["id" => $id]);
        redirect("admin/users");
    }
}
