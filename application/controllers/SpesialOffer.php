<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SpesialOffer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('SpesialOfferModel');
    }

    public function index() {
        // Mengambil data dari model
        $data['rooms'] = $this->SpesialOfferModel->getAll();
        // Memuat view dengan data
        $this->load->view('admin/header', $data);
        $this->load->view('admin/spesial/index', $data);
        $this->load->view('admin/footer', $data);    

    }

    public function add() {
        // Mengambil data dari model
        $data['linkform'] = "admin/specialoffer/create";
        $data['spesial'] = $this->SpesialOfferModel->getAll();
        // Memuat view dengan data
        $this->load->view('admin/header', $data);
        $this->load->view('admin/spesial/create', $data);
        $this->load->view('admin/footer', $data);    

    }

    public function edit($id) {
        // Mengambil data dari model
        $data['linkform'] = "admin/specialoffer/update/".$id;
        $data['spesial'] = $this->SpesialOfferModel->getById(["id" => $id]);
        // Memuat view dengan data
        $this->load->view('admin/header', $data);
        $this->load->view('admin/spesial/create', $data);
        $this->load->view('admin/footer', $data);    

    }

    public function create() {
        // Mendapatkan data dari form
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image'))
        {
            $data['upload_error'] = $this->upload->display_errors();
            // redirect("admin/specialoffer/add");
        }
        else
        {
            $upload_data = $this->upload->data();
            $thumbnail_path = 'uploads/' . $upload_data['file_name'];
        }

        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto' => $thumbnail_path
        );
        // Menyimpan data ke dalam database melalui model
        $this->SpesialOfferModel->insert($data);
        // Redirect kembali ke halaman index
        redirect('admin/specialoffer');
    }

    public function update($id) {
        $spesial = $this->SpesialOfferModel->getById(["id" => $id]);
        // Mendapatkan data dari form
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);
       
        if (!empty($_FILES['image']['name']))
            {
                if (!$this->upload->do_upload('image'))
                {
                    $data['upload_error'] = $this->upload->display_errors();
                }
                else
                {
                    $upload_data = $this->upload->data();
                    $thumbnail_path = 'uploads/' . $upload_data['file_name'];
                }
            }
            else
            {
                $thumbnail_path = $spesial->foto;
            }
       
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto' => $thumbnail_path
        );
        // Memperbarui data di database melalui model
        $this->SpesialOfferModel->update($id, $data);
        // Redirect kembali ke halaman index
        redirect('admin/specialoffer');
    }

    public function delete($id) {
        // Menghapus data dari database melalui model
        $this->SpesialOfferModel->delete($id);
        // Redirect kembali ke halaman index
        redirect('admin/specialoffer');
    }
}