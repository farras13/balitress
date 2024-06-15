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

		$data['retreats_daily'] = $this->m->getData("retreats")->result();
        $data['villa'] = $this->m->getData("villa")->result();
        $data['spesialoffer'] = $this->m->getData("spesialoffer")->result();
        
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}

    public function villa()
	{
        $data["villas"] = $this->m->getData("villa")->result();
        $data["gallery"] = $this->m->getData("villa_galery")->result();
		$this->load->view('header', $data);
		$this->load->view('villa', $data);
		$this->load->view('footer', $data);
	}

	public function detail_villa($id)
	{
        $data["villa"] = $this->m->getData("villa", ["id" => $id])->row();
        $data["gallery"] = $this->m->getData("villa_galery", ["villa_id" => $id])->result();
		$this->load->view('header', $data);
		$this->load->view('detailVilla',$data);
		$this->load->view('footer');
	}

    public function activities()
	{
		$retreats = $this->m->getData("retreats")->result();		
		$config['base_url'] = base_url('tour');
        $config['total_rows'] = count($retreats);
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
        $data['cards'] = $this->m->getDataLimit("retreats", "", $config['per_page'], $page)->result();
        $data['pagination'] = $this->pagination->create_links();
        foreach($data['cards'] as $d){
            $text = trim($d->name);
            $expl = explode(' ', $text);
            $words = explode(' ', $text);
            $d->endname = end($expl);

            array_pop($words);
            $d->name = implode(" ", $words);
        }
		$this->load->view('header');
		$this->load->view('aktivitas', $data);
		$this->load->view('footer');
	}
	public function detail_activities($id)
	{
        $data["retreat"] = $this->m->getData("retreats", ["retreat_id" => $id])->row();
        $text = trim($data["retreat"]->name);
        $expl = explode(' ', $text);
        $words = explode(' ', $text);
        $data["retreat"]->endname = end($expl);

        array_pop($words);
        $data["retreat"]->name = implode(" ", $words);		
		$this->load->view('header');
		$this->load->view('detailAktivitas', $data);
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