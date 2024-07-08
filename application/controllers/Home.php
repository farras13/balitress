<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User home page
 */
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
		$data['retreat'] = $this->m->getData("retreats", ['is_home' => "on"])->row();
		$data['galretreat'] = $this->m->getData("retreat_gallery", ['retreat_id' => $data['retreat']->retreat_id])->result();
        $data['villa'] = $this->m->getData("villa")->result();
        $data['spesialoffer'] = $this->m->getData("spesialoffer")->result();
        $data['banner'] = $this->m->getData("banners", ["menu" => "utama"])->result();
		$data['toursatu'] = $this->m->getData("banners", ["menu" => "tour1"])->row();
		$data['tourdua'] = $this->m->getData("banners", ["menu" => "tour2"])->row();
		$data['tourtiga'] = $this->m->getData("banners", ["menu" => "tour3"])->row();
		$data['tourinfo'] = $this->m->getData("banners", ["menu" => "tourinfo"])->row();
		$data['link'] = $this->m->getData("link")->row();
		$data['desc'] = $this->m->getData("banners", ["menu" => "descvilla"])->row();

		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}

    public function villa()
	{
        $data["villas"] = $this->m->getData("villa")->result();
        $data["gallery"] = $this->m->getData("villa_galery")->result();
        $data['banner'] = $this->m->getData("banners", ["menu" => "b-Villa"])->result();
		$data['desc'] = $this->m->getData("banners", ["menu" => "descvilla"])->row();
        $data['link'] = $this->m->getData("link")->row();
		$this->load->view('header', $data);
		$this->load->view('villa', $data);
		$this->load->view('footer', $data);
	}

	public function detail_villa($id)
	{
		$checkinDate = $this->session->userdata('date_startdate') ?? date('Y-m-d');
		$checkoutDate = $this->session->userdata('date_enddat') ?? (new DateTime())->modify("+1 day")->format('Y-m-d');

        $data["villa"] = $this->m->getData("villa", ["id" => $id])->row();
		$data["others"] = $this->m->getData("villa", ["id !=" => $id])->result();
        $data["fasilitas"] = $this->m->get_villa_fasilitass($id);
        $data["gallery"] = $this->m->getData("villa_galery", ["villa_id" => $id])->result();
        $data["rooms"] = $this->db->query("call check_booked_villa_date($checkinDate, $checkoutDate, $id)")->result();
		$this->load->view('header', $data);
		$this->load->view('detailVilla',$data);
		$this->load->view('footer');
	}

    public function activities()
	{
		$retreats = $this->m->getData("retreats", ["retreat_tipe !=" => "Activities"])->result();
        $config1 = array();
        $config1['base_url'] = base_url('activities');
        $config1['total_rows'] = count($retreats);
        $config1['per_page'] = 4;
        $config1['uri_segment'] = 2;
        $config1['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config1['full_tag_close'] = '</ul></nav>';
        $config1['attributes'] = array('class' => 'page-link');
        $config1['first_link'] = 'First';
        $config1['last_link'] = 'Last';
        $config1['first_tag_open'] = '<li class="page-item">';
        $config1['first_tag_close'] = '</li>';
        $config1['prev_link'] = '&laquo';
        $config1['prev_tag_open'] = '<li class="page-item">';
        $config1['prev_tag_close'] = '</li>';
        $config1['next_link'] = '&raquo';
        $config1['next_tag_open'] = '<li class="page-item">';
        $config1['next_tag_close'] = '</li>';
        $config1['last_tag_open'] = '<li class="page-item">';
        $config1['last_tag_close'] = '</li>';
        $config1['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config1['cur_tag_close'] = '</a></li>';
        $config1['num_tag_open'] = '<li class="page-item">';
        $config1['num_tag_close'] = '</li>';

        $pagination1 = clone $this->pagination;
        $pagination1->initialize($config1);

        $page1 = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['cards'] = $this->m->getDataLimit("retreats", ["retreat_tipe !=" => "Activities"], $config1['per_page'], $page1)->result();
        $data['pagination1'] = $pagination1->create_links();

        // Membuat instance pagination kedua
        $pagination2 = clone $this->pagination;

        $activities = $this->m->getData("retreats", ["retreat_tipe" => "Activities"])->result();

        $config2['base_url'] = base_url('activities/daily');
        $config2['total_rows'] = count($activities);
        $config2['per_page'] = 8;
        $config2['uri_segment'] = 3;
        $config2['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config2['full_tag_close'] = '</ul></nav>';
        $config2['attributes'] = array('class' => 'page-link');
        $config2['first_link'] = 'First';
        $config2['last_link'] = 'Last';
        $config2['first_tag_open'] = '<li class="page-item">';
        $config2['first_tag_close'] = '</li>';
        $config2['prev_link'] = '&laquo';
        $config2['prev_tag_open'] = '<li class="page-item">';
        $config2['prev_tag_close'] = '</li>';
        $config2['next_link'] = '&raquo';
        $config2['next_tag_open'] = '<li class="page-item">';
        $config2['next_tag_close'] = '</li>';
        $config2['last_tag_open'] = '<li class="page-item">';
        $config2['last_tag_close'] = '</li>';
        $config2['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config2['cur_tag_close'] = '</a></li>';
        $config2['num_tag_open'] = '<li class="page-item">';
        $config2['num_tag_close'] = '</li>';

        // Inisialisasi pagination kedua dengan instance yang baru
        $pagination2->initialize($config2);

        $page2 = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['another_cards'] = $this->m->getDataLimit("retreats", ["retreat_tipe" => "Activities"], $config2['per_page'], $page2)->result();
        $data['pagination2'] = $pagination2->create_links();

        $data['gallery'] = $this->m->getData("retreat_gallery")->result();
        $data['banner'] = $this->m->getData("banners", ["menu" => "b-Retreat"])->result();
		$data['desk'] = $this->m->getData("banners", ["menu" => "aktivitas"])->row();

        $this->load->view('header');
        $this->load->view('aktivitas', $data);
        $this->load->view('footer');
	}
	public function detail_activities($id)
	{
        $data["retreat"] = $this->m->getData("retreats", ["retreat_id" => $id])->row();
        $data["villa"] = $this->m->getData("villa")->result();
        $data["rooms"] = $this->m->getData("rooms")->result();
        $data["rv"] = $this->m->getData("retreat_villa", ["retreat_id" => $id])->result();
		$data['gallery'] = $this->m->getData("retreat_gallery", ["retreat_id" => $data['retreat']->retreat_id])->result();		
        $data["others"] = $this->m->getData("retreats", ["retreat_id !=" => $id])->result();
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
        $data["gallery"] = $this->m->getData("galeritourpackage")->result();
        $data['banner'] = $this->m->getData("banners", ["menu" => "b-Tour"])->result();
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
        $config['per_page'] = 4;
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

    public function specialoffer()
	{
        $data["specialoffer"] = $this->m->getData("spesialoffer")->result();
        $data['banner'] = $this->m->getData("banners", ["menu" => "b-Special"])->result();
        $data["gallery"] = $this->m->getData("spesialoffer_gallery")->result();
        $this->load->view('header');
		$this->load->view('spesialoffer', $data);
		$this->load->view('footer', $data);
	}

	public function detail_specialoffer($id)
	{
        $data["gallery"] = $this->m->getData("spesialoffer_gallery", ["spesialoffer_id" => $id])->result();
        $data["specialoffer"] = $this->m->getData("spesialoffer", ['id' => $id])->row();
        $data['banner'] = $this->m->getData("banners", ["menu" => "specialoffer"])->row();
		$this->load->view('header', $data);
		$this->load->view('detailspecialoffer',$data);
		$this->load->view('footer');
	}

	public function payment()
	{
        $cartData = $this->input->post('cartData');// Assuming 'cart' is the key used in localStorage
        $cartArray = json_decode($cartData, true);
        // Process $cartData as needed
        // Example: Pass $cartData to a view
        $dataItems = [];
        $price = 0;
        $price_aktivitas = 0;
        
        foreach($cartArray as $c) {
            if($c['tipe'] == "villa") {
                $rooms = $this->m->getData("rooms", ["id" => $c['id']])->row();
                $villa = $this->m->getData("villa", ['id' => $rooms->villa_id])->row();
                $data = [
                    "thumbnail" => base_url("".$villa->image),
                    "nama" => $villa->name,
                    "rooms" => $rooms->room_name,
                    "room_id" => $rooms->room_id,
                    "villa_id" => $rooms->villa_id,
                    "qty" => $c["quantity"],
                    "aktivitas_id" => "-",
                    "aktivitas_name" => "-",
                    'harga' => $c['price'],
                    'harga_aktivitas' => 0
                ];
                $temp = $c['price'] * $c['quantity'];
            } else {
                $rooms = $this->m->getData("rooms", ["id" => $c['id']])->row();
                $villa = $this->m->getData("villa", ['id' => $rooms->villa_id])->row();
                $aktivitas = $this->m->getData("retreats", ["retreat_id" => $c['aktivitas']])->row();
                $data = [
                    "thumbnail" => base_url("".$aktivitas->image),
                    "nama" => $aktivitas->name,
                    "rooms" => $villa->name ." - ".$rooms->room_name,
                    "room_id" => $rooms->id,
                    "villa_id" => $rooms->villa_id,
                    "qty" => $c["quantity"],
                    "aktivitas_id" => $aktivitas->retreat_id,
                    "aktivitas_name" => $aktivitas->name,
                    'harga' => $c['price'],
                    'harga_aktivitas' => $aktivitas->price
                ];
                $temp = $c['price'] * $c['quantity'];
                $price_aktivitas = $aktivitas->price;
            }
            $price += $temp;
            
            // Add the data to the dataItems array
            $dataItems[] = $data;
        }
        $price += $price_aktivitas;
        
        // Save the items data and total price to the session
        $this->session->set_userdata("data-item", $dataItems);
        $this->session->set_userdata("data-totalPrice", $price);
	}

	public function search()
	{
		$this->session->set_userdata("date_startdate", $_GET['checkin']);
		$this->session->set_userdata("date_enddate", $_GET['checkout']);

        $cari = $this->input->post("cari");
        $tipe = $this->input->post("tipe");

        $data["aktivitas"] = $this->m->getData("retreats",null,null, ["name" => $cari] )->result();
        $data["villa"] = $this->m->getData("villa",null,null, ["name" => $cari])->result();
        $data["tour"] = $this->m->getData("tourpackage",null,null, ["Name" => $cari])->result();

		$this->load->view('header');
		$this->load->view('search', $data);
		$this->load->view('footer');
	}
}
