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
        $this->load->view('admin/header');
        $this->load->view('admin/retreat/create');
        $this->load->view('admin/footer');
    }

    public function insertdata(){
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'highlights' => $this->input->post('highlights'),
            'facilities' => $this->input->post('facilities'),
            'is_home' => $this->input->post('popular'),
            'image' => $this->upload_image()
        );
        $this->Retreats_model->insert($data);
        $this->session->set_flashdata('message', 'Room created successfully');
        redirect('retreats');
    }

    public function edit($id) {
        $data['retreat'] = $this->Retreats_model->get_by_id($id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/retreat/edit', $data);
        $this->load->view('admin/footer');

    }

    public function update($id) {
        $retreat = $this->Retreats_model->get_by_id($id);
        $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
            $config['max_size'] = 2048;
            $this->load->library('upload', $config);
            if (!empty($_FILES['image']['name']))
            {
                if (!$this->upload->do_upload('image'))
                {
                    $data['upload_error'] = $this->upload->display_errors();
                    $this->load->view('admin/tour/edit', $data);
                }
                else
                {
                    $upload_data = $this->upload->data();
                    $image_path = 'uploads/' . $upload_data['file_name'];
                }
            }
            else
            {
                $image_path = $retreat->image;
            }
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'highlights' => $this->input->post('highlights'),
            'facilities' => $this->input->post('facilities'),
            'is_home' => $this->input->post('popular'),
            'image' => $image_path // Upload gambar dan dapatkan nama file
        );
        $this->Retreats_model->update($id, $data);
        $this->session->set_flashdata('sukses', "Berhasil Update");
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
        if (!empty($_FILES['thumbnail']['name']))
        {
            if ($this->upload->do_upload('image')) { // 'image' merupakan nama input file di form
                $data = $this->upload->data();
                return 'uploads/' . $data['file_name']; // Mengembalikan nama file yang diunggah
            } else {
                $error = $this->upload->display_errors();
                // Handle error sesuai kebutuhan Anda, misalnya menampilkan pesan kesalahan
                $this->session->set_flashdata('error', $error);
                redirect('retreats/create'); // Redirect kembali ke halaman create
            }
        }       
    }

    
    // public function gallery($id)
    // {
    //     $data['package'] = $this->Tour_package_model->get_packages($id);
    //     $data['gallery'] = $this->GalleryTourPackage_model->get_all_images();
    //     $data['id'] = $id;
    //     $this->load->view('admin/header', $data);
    //     $this->load->view('admin/tour/gallery', $data);
    //     $this->load->view('admin/footer');
    // }

    // public function upload_images()
    // {
    //     $config['upload_path'] = './uploads/';
    //     $config['allowed_types'] = 'gif|jpg|png';
    //     $config['max_size'] = 2048;
    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('image'))
    //     {
    //         $data['upload_error'] = $this->upload->display_errors();
    //         $this->gallery();
    //     }
    //     else
    //     {
    //         $upload_data = $this->upload->data();
    //         $image_path = 'uploads/' . $upload_data['file_name'];
    //         $url = "tourpackage/gallery/".$this->input->post('tour_id');
    //         $data = array(
    //             'tour_id' => $this->input->post('tour_id'),
    //             'images' => $image_path
    //         );

    //         $this->GalleryTourPackage_model->add_image($data);
    //         redirect($url);
    //     }
    // }

    // public function delete_image($id)
    // {
    //     $this->GalleryTourPackage_model->delete_image($id);
    //     redirect('tourpackage/gallery/'.$id);
    // }
}
