<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CartModel');
    }

    public function addToCart() {
        $data = json_decode($this->input->raw_input_stream, true);
        $this->CartModel->add_to_cart($data);
        echo json_encode(['status' => 'success']);
    }

    public function removeFromCart() {
        $data = json_decode($this->input->raw_input_stream, true);
        $this->CartModel->remove_from_cart($data['index']);
        echo json_encode(['status' => 'success']);
    }

    public function getCart() {
        $cart = $this->CartModel->get_cart();
        echo json_encode($cart);
    }

    public function clearCart() {
        $this->CartModel->clear_cart();
        echo json_encode(['status' => 'success']);
    }
}
