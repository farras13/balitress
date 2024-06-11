<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('log') == null) {
		// 	redirect('Auth');
		// }
		$this->load->library('pagination');
        $this->load->model('Tour_package_model');
		$this->load->model('M_basic', 'm');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

    public function villa()
	{
		$this->load->view('header');
		$this->load->view('villa');
		$this->load->view('footer');
	}

	public function detail_villa()
	{
		$this->load->view('header');
		$this->load->view('detailVilla');
		$this->load->view('footer');
	}

    public function activities()
	{
		$this->load->view('header');
		$this->load->view('aktivitas');
		$this->load->view('footer');
	}
	public function detail_activities()
	{
		$this->load->view('header');
		$this->load->view('detailAktivitas');
		$this->load->view('footer');
	}

	public function tour()
	{
		$config['base_url'] = base_url('tour');
        $config['total_rows'] = $this->Tour_package_model->get_total_tours();
        $config['per_page'] = 16;
        $config['uri_segment'] = 2;
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['attributes'] = array('class' => 'page-link');
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['cards'] = $this->Tour_package_model->get_cards($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();
		// var_dump($data);die;
		$this->load->view('header');
		$this->load->view('tour', $data);
		$this->load->view('footer');
	}

	public function detail_tour($id)
	{
		$data['package'] = $this->Tour_package_model->get_packages($id);
		$data['gallery'] = $this->m->getData("galeritourpackage", ["Tour_id" => $id])->result();
		$data['iexclude'] = $this->m->getData("ietourpackage", ["Tour_id" => $id])->result();
		$config['base_url'] = base_url('tour');
        $config['total_rows'] = $this->Tour_package_model->get_total_tours();
        $config['per_page'] = 3;
        $config['uri_segment'] = 2;
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['attributes'] = array('class' => 'page-link');
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['cards'] = $this->Tour_package_model->get_cards($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('header');
		$this->load->view('detailTour', $data);
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function payment()
	{
		$this->load->view('header');
		$this->load->view('Payment');
		$this->load->view('footer');
	}

	public function search()
	{
		$this->load->view('header');
		$this->load->view('search');
		$this->load->view('footer');
	}
}