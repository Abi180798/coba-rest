<?php

use GuzzleHttp\Client;

class Coba_model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/coba-rest/api/',
        ]);
    }

    public function getAll()
    {
        $response = $this->_client->request('GET', 'barang');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
