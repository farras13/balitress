<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_package extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tour_package_model');
        $this->load->model('GalleryTourPackage_model'); 
        $this->load->model('IncludeExclude_model');
		$this->load->model('M_basic', 'm');

        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index() {
        $data['tour_packages'] = $this->Tour_package_model->get_packages();
        $data['title'] = 'Tour Packages';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/tour/index', $data);
        $this->load->view('admin/footer');
    }

    public function view($id) {
        $data['tour_package'] = $this->Tour_package_model->get_packages($id);
        $data['package'] = $this->Tour_package_model->get_packages($id);
		$data['gallery'] = $this->m->getData("galeritourpackage", ["Tour_id" => $id])->result();
		$data['iexclude'] = $this->m->getData("ietourpackage", ["Tour_id" => $id])->result();
        
        if (empty($data['tour_package'])) {
            show_404();
        }

        $data['title'] = $data['tour_package']['package_name'];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/tour/view', $data);
        $this->load->view('admin/footer');
    }

    public function create() {
        $data['title'] = 'Create Tour Package';
        $data['linkform'] = 'tourpackage/create';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|integer');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('lite_desc', 'Lite Description', 'required');
        $this->form_validation->set_rules('full_desc', 'Full Description', 'required');
        $this->form_validation->set_rules('highlight', 'Highlight', 'required');
        $this->form_validation->set_rules('info', 'Info', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tour/create');
            $this->load->view('admin/footer');
        }
        else
        {
            // Handle file upload
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
            $config['max_size'] = 5120;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('thumbnail'))
            {
                $data['upload_error'] = $this->upload->display_errors();
                var_dump($this->upload->display_errors());die;
                // $this->load->view('tourpackage/create', $data);
            }
            else
            {
                $upload_data = $this->upload->data();
                $thumbnail_path = 'uploads/' . $upload_data['file_name'];

                $data = array(
                    'Name' => $this->input->post('name'),
                    'Price' => $this->input->post('price'),
                    'About' => $this->input->post('about'),
                    'Lite_desc' => $this->input->post('lite_desc'),
                    'Full_desc' => $this->input->post('full_desc'),
                    'Highlight' => $this->input->post('highlight'),
                    'Info' => $this->input->post('info'),
                    'Thumbnail' => $thumbnail_path,
                    'is_popular' => $this->input->post('popular'),
                    'Created_by' => "admin",
                    'Created_date' => date('Y-m-d H:i:s'),
                    'Modif_by' => "admin", // Initially same as Created_by
                    'Modif_date' => date('Y-m-d H:i:s')
                );

                $this->Tour_package_model->create_package($data);
                redirect('tourpackage');
            }
        }
    }

    public function edit($id) {
        $data['linkform'] = "tourpackage/edit/$id";

        $data['tour_package'] = $this->Tour_package_model->get_packages($id);
        
        if (empty($data['tour_package'])) {
            show_404();
        }

        $data['title'] = 'Edit Tour Package';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|integer');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('lite_desc', 'Lite Description', 'required');
        $this->form_validation->set_rules('full_desc', 'Full Description', 'required');
        $this->form_validation->set_rules('highlight', 'Highlight', 'required');
        $this->form_validation->set_rules('info', 'Info', 'required');

        // var_dump($data);die;
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tour/edit', $data);
            $this->load->view('admin/footer');
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
            $config['max_size'] = 5120;
            $this->load->library('upload', $config);

            if (!empty($_FILES['thumbnail']['name']))
            {
                if (!$this->upload->do_upload('thumbnail'))
                {
                    $data['upload_error'] = $this->upload->display_errors();
                    $this->load->view('admin/tour/edit', $data);
                }
                else
                {
                    $upload_data = $this->upload->data();
                    $thumbnail_path = 'uploads/' . $upload_data['file_name'];
                }
            }
            else
            {
                $thumbnail_path = $data['tour_package']['Thumbnail'];
            }

            $input_data = array(
                'Name' => $this->input->post('name'),
                'Price' => $this->input->post('price'),
                'About' => $this->input->post('about'),
                'Lite_desc' => $this->input->post('lite_desc'),
                'Full_desc' => $this->input->post('full_desc'),
                'Highlight' => $this->input->post('highlight'),
                'Info' => $this->input->post('info'),
                'Thumbnail' => $thumbnail_path,
                'is_popular' => $this->input->post('popular'),
                'Modif_by' => $this->input->post('modified_by'),
                'Modif_date' => date('Y-m-d H:i:s')
            );

            $this->Tour_package_model->update_package($id, $input_data);
            redirect('tourpackage');
        }
    }

    public function delete($id) {
        $this->Tour_package_model->delete_package($id);
        redirect('tourpackage');
    }

    public function gallery($id)
    {
        $data['package'] = $this->Tour_package_model->get_packages($id);
        $data['gallery'] = $this->GalleryTourPackage_model->get_all_images_tour($id);
        $data['id'] = $id;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tour/gallery', $data);
        $this->load->view('admin/footer');
    }

    public function upload_image()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp|svg';
        $config['max_size'] = 5120;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image'))
        {
            $data['upload_error'] = $this->upload->display_errors();
            $this->gallery();
        }
        else
        {
            $upload_data = $this->upload->data();
            $image_path = 'uploads/' . $upload_data['file_name'];
            $url = "tourpackage/gallery/".$this->input->post('tour_id');
            $data = array(
                'tour_id' => $this->input->post('tour_id'),
                'images' => $image_path
            );

            $this->GalleryTourPackage_model->add_image($data);
            redirect($url);
        }
    }

    public function delete_image($id)
    {
        $data = $this->m->getData(["galeritourpackage","Tour_id"=>$id]);
        $this->GalleryTourPackage_model->delete_image($id);
        redirect('tourpackage/gallery/'.$data->Tour_id);
    }

    public function include_exclude($id)
    {
        $data['package'] = $this->Tour_package_model->get_packages($id);
        $data['includes'] = $this->IncludeExclude_model->get_all_includes();
        $data['excludes'] = $this->IncludeExclude_model->get_all_excludes();
        $data['id'] = $id;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tour/include_exclude', $data);
        $this->load->view('admin/footer');
    }

    public function add_include_exclude($id)
    {
        $this->form_validation->set_rules('tour_id', 'Tour Package', 'required');
        $this->form_validation->set_rules('include', 'Include', 'required');
        $this->form_validation->set_rules('exclude', 'Exclude', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            redirect('tourpackage/include_exclude/'.$id);
        }
        else
        {
            $include_data = array(
                'Tour_id' => $id,
                'Name' => $this->input->post('include')
            );

            $exclude_data = array(
                'Tour_id' => $id,
                'Name' => $this->input->post('exclude')
            );
             
            $this->IncludeExclude_model->add_include($include_data);
            $this->IncludeExclude_model->add_exclude($exclude_data);

            redirect('tourpackage/include_exclude/'.$id);
        }
    }

    public function delete_include($id)
    {
        $this->IncludeExclude_model->delete_include($id);
        redirect('tourpackage/include_exclude/'.$id);
    }

    public function delete_exclude($id)
    {
        $this->IncludeExclude_model->delete_exclude($id);
        redirect('tourpackage/include_exclude/'.$id);
    }
}
