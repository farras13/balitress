<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retreats extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Retreats_model');
        if (!$this->session->userdata('log')) {
            redirect('Login');
        }
    }

    public function index() {
        $data['retreats'] = $this->Retreats_model->get_all();
        $data['retreat'] = $this->Retreats_model->get_by_id(1);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/retreat/index', $data);
         
    }

    public function create() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('highlights', 'Highlights', 'required');
        $this->form_validation->set_rules('facilities', 'Facilities', 'required');
        $this->form_validation->set_rules('image', 'Image', 'callback_validate_image');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali halaman create retreat dengan pesan error
            $this->load->view('admin/header');
            $this->load->view('admin/retreat/create');
            $this->load->view('admin/footer');
        } else {
            // Jika validasi berhasil, lanjutkan proses penyimpanan data retreat
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'highlights' => $this->input->post('highlights'),
                'facilities' => $this->input->post('facilities'),
                'image' => $this->upload_image()
            );
            $this->Retreats_model->insert($data);
            $this->session->set_flashdata('message', 'Room created successfully');
            redirect('retreats');
        }
    }

    public function edit($id) {
        $data['retreat'] = $this->Retreats_model->get_by_id($id);
        $this->load->view('retreats/edit', $data);
    }

    public function update($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'highlights' => $this->input->post('highlights'),
            'facilities' => $this->input->post('facilities'),
            'image' => $this->upload_image() // Upload gambar dan dapatkan nama file
        );
        $this->Retreats_model->update($id, $data);
        $this->session->set_flashdata('sukses', $error);
        redirect('retreats');
    }

    public function delete($id) {
        $this->Retreats_model->delete($id);
        redirect('retreats');
    }

    public function validate_image() {
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 3072; // 3 MB
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('image')) {
                // Jika validasi gambar gagal, set pesan error
                $this->form_validation->set_message('validate_image', $this->upload->display_errors());
                return FALSE;
            } else {
                return TRUE;
            }
        } else {
            // Jika tidak ada gambar yang diunggah, abaikan validasi gambar
            return TRUE;
        }
    }

    private function upload_image() {
        $config['upload_path'] = './uploads/'; // Lokasi penyimpanan gambar di server
        $config['allowed_types'] = 'jpg|jpeg|png'; // Format yang diizinkan
        $config['max_size'] = 3072; // Maksimum ukuran dalam KB (3 MB)

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('uploads')) { // 'image' merupakan nama input file di form
            $data = $this->upload->data();
            return $data['file_name']; // Mengembalikan nama file yang diunggah
        } else {
            $error = $this->upload->display_errors();
            // Handle error sesuai kebutuhan Anda, misalnya menampilkan pesan kesalahan
            $this->session->set_flashdata('error', $error);
            redirect('retreats/create'); // Redirect kembali ke halaman create
        }
    }
}
