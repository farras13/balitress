<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('log')) {
            redirect('Login');
        }
        $this->load->model('Room_model');
        $this->load->helper('url');
        
    }

    public function index() {
        $data['rooms'] = $this->Room_model->get_all_rooms(['villa_id' => $this->uri->segment(2)]);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/rooms/index', $data);
        $this->load->view('admin/footer', $data);
    }

    public function create() {
        $no = $_GET["no"];
        $data['room_types'] = $this->Room_model->get_room_types();
        $data['facilities'] = $this->Room_model->get_facilities();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('room_name', 'Room Name', 'required');
        $this->form_validation->set_rules('room_type_id', 'Room Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data["villa_id"] = $no;
            $this->load->view('admin/header', $data);
            $this->load->view('admin/rooms/create', $data);
            $this->load->view('admin/footer', $data);
        } else {
            $room_data = [
                'room_name' => $this->input->post('room_name'),
                'villa_id' => $this->input->post("villa_id"),
                'room_type' => $this->input->post('room_type_id'),
                'size' => $this->input->post('size'),
                'view_description' => $this->input->post('view_description'),
                'location' => $this->input->post('location'),
                'price' => $this->input->post('price'),
                'price_meals' => $this->input->post('price_meals'),
                'price_package' => $this->input->post('price_package'),
                'description' => $this->input->post('description')
            ];
            $this->Room_model->create_room($room_data);
            $room_id = $this->db->insert_id();

            $facility_ids = $this->input->post('facility_ids');
            if (!empty($facility_ids)) {
                $this->Room_model->insert_room_facilities($room_id, $facility_ids);
            }

            $this->session->set_flashdata('message', 'Room created successfully');
            redirect('rooms/'.$this->input->post("villa_id"));
        }
    }

    public function edit($id) {
        $data['room'] = $this->Room_model->get_room_by_id($id);
        $data['room_types'] = $this->Room_model->get_room_types();
        $data['facilities'] = $this->Room_model->get_facilities();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('room_name', 'Room Name', 'required');
        $this->form_validation->set_rules('room_type_id', 'Room Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/rooms/edit', $data);
            $this->load->view('admin/footer', $data);    
        } else {
            $room_data = [
                'room_name' => $this->input->post('room_name'),
                'room_type' => $this->input->post('room_type_id'),
                'size' => $this->input->post('size'),
                'view_description' => $this->input->post('view_description'),
                'location' => $this->input->post('location'),
                'price' => $this->input->post('price'),
                'price_meals' => $this->input->post('price_meals'),
                'price_package' => $this->input->post('price_package'),
                'description' => $this->input->post('description')
            ];
            $this->Room_model->update_room($id, $room_data);

            $this->Room_model->delete_room_facilities($id);
            $facility_ids = $this->input->post('facility_ids');
            if (!empty($facility_ids)) {
                $this->Room_model->insert_room_facilities($id, $facility_ids);
            }

            $this->session->set_flashdata('message', 'Room updated successfully');
            redirect('rooms/'.$data['room']['villa_id']);
        }
    }

    public function delete($id) {
        $data = $this->Room_model->get_room_by_id($id);
        $this->Room_model->delete_room_facilities($id);
        $this->Room_model->delete_room($id);
        $this->session->set_flashdata('message', 'Room deleted successfully');
        redirect('rooms'.$data->villa_id);
    }
}
