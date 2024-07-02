<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('midtrans');
        $this->load->helper('url');
        $this->load->model("M_basic", "m");
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Payment_old');
        $this->load->view('footer');
    }

    public function addTransaction(){
        $post_data = json_decode(file_get_contents('php://input'), true);

        // Pastikan data yang dibutuhkan tersedia
        if (!empty($post_data['name']) && !empty($post_data['email']) && !empty($post_data['phone']) && !empty($post_data['orderDetails']) && !empty($post_data['totalAmount'])) {
            // Simpan data transaksi ke dalam database
            $data_transaksi = [
                "nama" => $post_data['name'],
                "email" => $post_data['email'],
                "phone" => $post_data['phone'],
                "total_amount" => $post_data['totalAmount']
            ];  
            $this->m->ins("transactions", $data_transaksi);
            $temp_id = $this->db->insert_id();
        
            foreach ($post_data['orderDetails'] as $pd) {
                // Perhitungan total price, perhatikan apakah ini sesuai dengan logika bisnis Anda
                $total_price = $pd["quantity"] * $pd['harga'];

                $data_transaksi_item = [
                    "transaction_id" => $temp_id,
                    "day_in" => $pd["checkin"],
                    "day_out" => $pd["checkout"],
                    "item_id" => (empty($pd["aktivitas_id"])) ? $pd["room_id"] : $pd["aktivitas_id"],
                    "category" =>(empty($pd["aktivitas_id"])) ? "villa" : "activity",
                    "item_name" => $pd['title'],
                    "quantity" => $pd['qty'],
                    "price_per_item" => $pd['harga'],
                    "total_price" => $total_price  // Sesuaikan dengan perhitungan yang benar
                ];
                $this->m->ins("transaction_items", $data_transaksi_item);
            }
            $this->session->unset_userdata("data-item");
            $this->session->unset_userdata("data-totalPrice");
            if (!empty($temp_id)) {
                // Jika penyimpanan berhasil
                $response = array(
                    'success' => true,
                    'message' => 'Data transaksi berhasil disimpan.',
                    'data' => $post_data
                );
            } else {
                // Jika gagal menyimpan data transaksi
                $response = array(
                    'success' => false,
                    'message' => 'Gagal menyimpan data transaksi.'
                );
            }
        } else {
            // Jika data yang diperlukan tidak lengkap
            $response = array(
                'success' => false,
                'message' => 'Data yang diperlukan tidak lengkap.'
            );
        }

        // Set header untuk response JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function getToken()
    {
        $postData = json_decode(file_get_contents('php://input'), true);

        $transaction_details = array(
            'order_id' => $postData['order_id'],
            'gross_amount' => $postData['gross_amount'],
        );

        $item_details = array();
        foreach ($postData['items'] as $item) {
            $item_details[] = array(
                'id' => $item['packageName'],
                'price' => $item['price'],
                'quantity' => 1,
                'name' => $item['packageName']
            );
        }

        $transaction_data = array(
            'transaction_details' => $transaction_details,
            'item_details' => $item_details,
        );

        $snapToken = \Midtrans\Snap::getSnapToken($transaction_data);
        echo json_encode(array('token' => $snapToken));
    }

    public function token()
    {
        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => 10000, // No decimal allowed for IDR
        );

        $item1_details = array(
            'id' => 'a1',
            'price' => 10000,
            'quantity' => 1,
            'name' => "Midtrans Test"
        );

        $customer_details = array(
            'first_name' => "Andri",
            'last_name' => "Litani",
            'email' => "andri@litani.com",
            'phone' => "081122334455",
        );

        $transaction = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => array($item1_details),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($transaction);
        echo $snapToken;
    }

    public function finish()
    {
        $result = json_decode($this->input->post('result_data'));
        echo 'RESULT <br><pre>';
        var_dump($result);
        echo '</pre>';
    }

    public function notification()
    {
        $json_result = file_get_contents('php://input');
        $result = json_decode($json_result, true);

        if ($result) {
            $notif = new \Midtrans\Notification();

            $transaction = $notif->transaction_status;
            $type = $notif->payment_type;
            $order_id = $notif->order_id;
            $fraud = $notif->fraud_status;

            if ($transaction == 'capture') {
                if ($type == 'credit_card') {
                    if ($fraud == 'challenge') {
                    } else {
                    }
                }
            } else if ($transaction == 'settlement') {
            } else if ($transaction == 'pending') {
            } else if ($transaction == 'deny') {
            } else if ($transaction == 'expire') {
            } else if ($transaction == 'cancel') {
            }
        }
    }
}
