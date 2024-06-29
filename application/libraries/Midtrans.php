<?php
require_once APPPATH . 'third_party/midtrans/Midtrans.php';

class Midtrans
{
    public function __construct()
    {
        // Use the server key from Midtrans Dashboard
        \Midtrans\Config::$serverKey = 'SB-Mid-server-A2UVdpF9DuxQen7OrQFEO8Fi';
        \Midtrans\Config::$isProduction = false; // Set to true for production
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    }
}
