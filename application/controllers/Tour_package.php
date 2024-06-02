<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_package extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tour_package_model');
        $this->load->helper('url_helper');
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
        $data['linkform'] = 'admin/tour/create';

        $this->form_validation->set_rules('package_name', 'Package Name', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'required');
        $this->form_validation->set_rules('participants', 'Participants', 'required');
        // $this->form_validation->set_rules('rating', 'Rating', 'required');
        // $this->form_validation->set_rules('reviews_count', 'Reviews Count', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('included', 'Included', 'required');
        $this->form_validation->set_rules('itinerary', 'Itinerary', 'required');
        $this->form_validation->set_rules('additional_info', 'Additional Info', 'required');
        $this->form_validation->set_rules('cancellation_policy', 'Cancellation Policy', 'required');


        if ($this->form_validation->run() === FALSE) {
            var_dump(validation_errors());
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tour/create');
            $this->load->view('admin/footer');
        } else {
            $input_data = array(
                'package_name' => $this->input->post('package_name'),
                'location' => $this->input->post('location'),
                'duration' => $this->input->post('duration'),
                'participants' => $this->input->post('participants'),
                'price' => $this->input->post('price'),
                'description' => $this->input->post('description'),
                'included' => $this->input->post('included'),
                'itinerary' => $this->input->post('itinerary'),
                'additional_info' => $this->input->post('additional_info'),
                'cancellation_policy' => $this->input->post('cancellation_policy')
            );
            $this->Tour_package_model->create_package($input_data);
            redirect('tour_package');
        }
    }

    public function edit($id) {
        $data['linkform'] = 'admin/tour/edit';

        $data['tour_package'] = $this->Tour_package_model->get_packages($id);
        
        if (empty($data['tour_package'])) {
            show_404();
        }

        $data['title'] = 'Edit Tour Package';

        $this->form_validation->set_rules('package_name', 'Package Name', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'required');
        $this->form_validation->set_rules('participants', 'Participants', 'required');
        // $this->form_validation->set_rules('rating', 'Rating', 'required');
        // $this->form_validation->set_rules('reviews_count', 'Reviews Count', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('included', 'Included', 'required');
        $this->form_validation->set_rules('itinerary', 'Itinerary', 'required');
        $this->form_validation->set_rules('additional_info', 'Additional Info', 'required');
        $this->form_validation->set_rules('cancellation_policy', 'Cancellation Policy', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tour/edit', $data);
            $this->load->view('admin/footer');
        } else {
            $input_data = array(
                'package_name' => $this->input->post('package_name'),
                'location' => $this->input->post('location'),
                'duration' => $this->input->post('duration'),
                'participants' => $this->input->post('participants'),
                'price' => $this->input->post('price'),
                'description' => $this->input->post('description'),
                'included' => $this->input->post('included'),
                'itinerary' => $this->input->post('itinerary'),
                'additional_info' => $this->input->post('additional_info'),
                'cancellation_policy' => $this->input->post('cancellation_policy')
            );
            $this->Tour_package_model->update_package($id, $input_data);
            redirect('tour_package');
        }
    }

    public function delete($id) {
        $this->Tour_package_model->delete_package($id);
        redirect('tour_package');
    }
}
