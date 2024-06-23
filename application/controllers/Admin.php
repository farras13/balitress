<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('log') == null) {
			redirect('Login');
		}
		$this->load->model('M_basic', 'm');
	}
	public function index()
	{
		$data['banner'] = $this->m->getData("banners", ["menu" => "utama"])->result();
		$data['toursatu'] = $this->m->getData("banners", ["menu" => "tour1"])->row();
		$data['tourdua'] = $this->m->getData("banners", ["menu" => "tour2"])->row();
		$data['tourtiga'] = $this->m->getData("banners", ["menu" => "tour3"])->row();
		$data['tourinfo'] = $this->m->getData("banners", ["menu" => "tourinfo"])->row();
		$data['spesial'] = $this->m->getData("banners", ["menu" => "specialoffer"])->row();

		$data['link'] = $this->m->getData("link")->row();
		$data['desc'] = $this->m->getData("banners", ["menu" => "descvilla"])->row();
		if(empty($data['link'])){
			$data['linkform'] = "admin/ins_link";
		}else{
			$data['linkform'] = "admin/upd_link/".$data['link']->id;
		}

		if(empty($data['desc'])){
			$data['linkformdesc'] = "admin/ins_desc";
		}else{
			$data['linkformdesc'] = "admin/upd_desc/".$data['desc']->id;
		}
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
	} 

	public function banner_add()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
        $config['max_size'] = 5120;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image'))
        {
            $data['upload_error'] = $this->upload->display_errors();
            $this->index();
        }
        else
        {
            $upload_data = $this->upload->data();
            $image_path = 'uploads/' . $upload_data['file_name'];
            $data = array(
				'menu' => "utama",
				'judul' => $this->input->post("judul"),
                'images' => $image_path
            );

            $this->m->ins("banners",$data);
            redirect("admin");
        }
    }
	
	public function delete_banner($id){
		$this->m->del("banners", ["id" => $id]);
		redirect("admin");
	}

	public function ins_link(){
		$this->m->ins("link", ["link" => $this->input->post("link")]);
		redirect("admin");
		
	}
	public function upd_link($id){
		$this->m->upd("link", ["link" => $this->input->post("link")], ["id" => $id]);
		redirect("admin");
		
	}
	public function ins_descspecialoffer(){
		$this->m->ins("banners", ["deskripsi" => $this->input->post("descvilla"), "menu" => "specialoffer" ]);
		redirect("admin");
		
	}
	public function ins_desc(){
		$this->m->ins("banners", ["deskripsi" => $this->input->post("descvilla"), "menu" => "descvilla" ]);
		redirect("admin");
		
	}
	public function upd_desc($id){
		$this->m->upd("banners", ["deskripsi" => $this->input->post("descvilla")], ["menu" => "descvilla"]);
		redirect("admin");
		
	}

	public function banner_tour_add()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
        $config['max_size'] = 5120;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image'))
        {
            $data['upload_error'] = $this->upload->display_errors();
            $this->index();
        }
        else
        {
            $upload_data = $this->upload->data();
            $image_path = 'uploads/' . $upload_data['file_name'];
            $data = array(
				'menu' => $this->input->post("menu"),
                'images' => $image_path
            );
			$cek = $this->m->getData("banners", ["menu" => $this->input->post("menu")])->row();
            if(empty($cek)){
				$this->m->ins("banners",$data);
			}else{
				$this->m->upd("banners",$data,["menu" => $this->input->post("menu")]);
			}
            redirect("admin");
        }
    }

	public function banner_tour_info()
    {
			$cek = $this->m->getData("banners", ["menu" => $this->input->post("menu")])->row();
            $data = array(
                'images' => "-",
				'menu' => $this->input->post("menu"),
				'judul' => $this->input->post("judul"),
				'deskripsi' => $this->input->post("deskripsi")
            );
            if(empty($cek)){
				$this->m->ins("banners",$data);
			}else{
				$this->m->upd("banners",$data,["menu" => $this->input->post("menu")]);
			}
            redirect("admin");
        
    }
}