<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function add_to_cart($data) {
        $cart = $this->session->userdata('cart') ? $this->session->userdata('cart') : [];
        $index = array_search($data['packageName'], array_column($cart, 'packageName'));

        if ($index !== false) {
            $cart[$index]['quantity'] += 1;
        } else {
            $data['quantity'] = 1;
            $cart[] = $data;
        }

        $this->session->set_userdata('cart', $cart);
    }

    public function remove_from_cart($index) {
        $cart = $this->session->userdata('cart') ? $this->session->userdata('cart') : [];
        array_splice($cart, $index, 1);
        $this->session->set_userdata('cart', $cart);
    }

    public function get_cart() {
        return $this->session->userdata('cart') ? $this->session->userdata('cart') : [];
    }

    public function clear_cart() {
        $this->session->unset_userdata('cart');
    }
}
