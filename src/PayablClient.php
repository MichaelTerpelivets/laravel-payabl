<?php

namespace PayablAPI;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use PayablAPI\Request\PaymentRequest;
use PayablAPI\Response\Payment;

class PayablClient
{

    public const MAIN_ENDPOINT = 'https://api.securionpay.com';


    /**
     * @param PaymentRequest $request
     * @return Payment
     * @throws Exception\MappingException
     * @throws GuzzleException
     */
    public function paymentAuthorize(PaymentRequest $request): Payment
    {
        $paymentAuthorize = '/pay/backoffice/payment_authorize';
        $url = self::MAIN_ENDPOINT . $paymentAuthorize;
        $config = config('payabl.php');
        $request->setMerchantId($config['merchant_id']);
        return new Payment($this->sendRequest($url, 'POST', $request->toArray()));
    }

    /**
     * @param string $endpoint
     * @param string $method
     * @param array $data
     * @return array
     * @throws GuzzleException
     */
    protected function sendRequest(string $endpoint, string $method, array $data): array
    {
        $client = new Client();
        $response = $client->request($method, $endpoint, $data);
        return [
            'status_code' => $response->getStatusCode(),
            'response' => $response->getBody()
        ];
    }

}