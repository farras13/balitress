<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Villa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('log')) {
            redirect('Login');
        }
        $this->load->model('M_basic', 'm');
        $this->load->helper('url');
        
    }

    public function index() {
        $data['rooms'] = $this->m->getData("villa")->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/villa/index', $data);
        $this->load->view('admin/footer', $data);
    }

    public function create() {
        $data['room_types'] = $this->m->getData("rooms");
        $data['facilities'] = $this->m->getData("facilities")->result_array();
        $data['linkform'] = 'admin/villa/create';
        $data['title'] = 'Create Villa';

        $this->load->library('form_validation');
        $this->form_validation->set_rules('villa_name', 'Villa Name', 'required');
        $this->form_validation->set_rules('villa_desk', 'Villa Deskripsi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/villa/create', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
            $config['max_size'] = 5120;
            $this->load->library('upload', $config);
           
            if (!$this->upload->do_upload('image'))
            {
                $data['upload_error'] = $this->upload->display_errors();
                $this->load->view('admin/rooms/create', $data);
            }
            else
            {
                $upload_data = $this->upload->data();
                $thumbnail_path = 'uploads/' . $upload_data['file_name'];
            }
            
            $villa_data = [
                'name' => $this->input->post('villa_name'),
                'deskripsi' => $this->input->post('villa_desk'),
                'pemandangan' => $this->input->post('view_description'),
                'lokasi' => $this->input->post('location'),
                'image' => $thumbnail_path,
            ];
            $this->m->ins('villa',$villa_data);            
            $room_id = $this->db->insert_id();

            $facility_ids = $this->input->post('facility_ids');
            if (!empty($facility_ids)) {
                $this->m->insert_villa_facilities($room_id, $facility_ids);
            }
            $this->session->set_flashdata('message', 'Room created successfully');
            redirect('admin/villa');
        }
    }

    public function edit($id) {
        $data['villa'] = $this->m->getData("villa", ["id" => $id])->row();
        $data['room'] = $this->m->get_villa_fasilitas($id);
        $data['facilities'] = $this->m->getData("facilities")->result_array();

        
        $data['linkform'] = 'admin/villa/edit/'.$id;

        $this->load->library('form_validation');
        $this->form_validation->set_rules('villa_name', 'Villa Name', 'required');
        $this->form_validation->set_rules('villa_desk', 'Villa Deskripsi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/villa/create', $data);
            $this->load->view('admin/footer', $data);    
        } else {
            if (!empty($_FILES['image']['name']))
            {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
                $config['max_size'] = 5120;
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('image'))
                {
                    $data['upload_error'] = $this->upload->display_errors();
                    $this->load->view('admin/villa/create', $data);
                }
                else
                {
                    $upload_data = $this->upload->data();
                    $thumbnail_path = 'uploads/' . $upload_data['file_name'];
                }
            }
            else
            {
                $thumbnail_path = $data['villa']->image;
            }
           
            $villa_data = [
                'name' => $this->input->post('villa_name'),
                'deskripsi' => $this->input->post('villa_desk'),
                'pemandangan' => $this->input->post('view_description'),
                'lokasi' => $this->input->post('location'),
                'image' => $thumbnail_path,
            ];
            $this->m->upd('villa', $villa_data, ["id" => $id]);      
            $facility_ids = $this->input->post('facility_ids');
            if (!empty($facility_ids)) {
                $this->m->del("villa_fasilitas", ["villa_id" => $id]);
                $this->m->insert_villa_facilities($id, $facility_ids);
            }
            $this->session->set_flashdata('message', 'Room updated successfully');
            redirect('admin/villa');
        }
    }

    public function delete($id) {
        $this->m->del("villa", ["id" =>$id]);
        $this->session->set_flashdata('message', 'Room deleted successfully');
        redirect('admin/villa');
    }

    public function gallery($id){
        $data['gallery'] = $this->m->getData("villa_galery", ["villa_id" => $id])->result();
        $data['id'] = $id;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/villa/gallery', $data);
        $this->load->view('admin/footer', $data);
    }

    public function upload_image($id)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
        $config['max_size'] = 5120;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image'))
        {
            $data['upload_error'] = $this->upload->display_errors();
            $this->gallery($id);
        }
        else
        {
            $upload_data = $this->upload->data();
            $image_path = 'uploads/' . $upload_data['file_name'];
            $url = "admin/villa/gallery/".$id;
            $data = array(
                'villa_id' => $id,
                'image' => $image_path
            );

            $this->m->ins("villa_galery",$data);
            redirect($url);
        }
    }

    public function delete_image($id)
    {
        $this->m->del("villa_galery",["id"=>$id]);
        redirect('admin/villa/gallery/'.$id);
    }


    public function ins_room($id){
        $rooms = $this->input->post("room_id");
        foreach ($rooms as $r) {
            $villa_room = array(
                "villa_id" => $id,
                "room_id" => $r,
            );
        }
    }
}
