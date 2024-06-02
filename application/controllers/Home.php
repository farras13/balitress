<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('log') == null) {
		// 	redirect('Auth');
		// }
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
		$this->load->view('header');
		$this->load->view('tour');
		$this->load->view('footer');
	}

	public function detail_tour()
	{
		$this->load->view('header');
		$this->load->view('detailTour');
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