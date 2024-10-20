<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalController extends Controller
{
    private $apiClient;
    private $clientId;
    private $clientSecret;

    public function __construct()
    {
        $this->apiClient = $_ENV['PAYPAL_API_ENDPOINT'];
        $this->clientId = $_ENV['PAYPAL_CLIENT_ID'];
        $this->clientSecret = $_ENV['PAYPAL_CLIENT_SECRET'];
    }
}
