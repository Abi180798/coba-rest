<?php

use GuzzleHttp\Client;

class Youtube_model extends CI_Model
{
    private $_client;

    // public function __construct()
    // {
    //     $this->_client = new Client([
    //         'base_uri' => 'GET https://www.googleapis.com/youtube/v3/', [
    //             'query' => [
    //                 'part' => 'snippet,statistics',
    //                 'id' => 'UCbBZsh5gW0fcmJzd6bRtFhA',
    //                 'key' => 'AIzaSyDH3oeFy1RnagnQEyPYdXVP3p1V2ka7FXY',
    //             ]
    //         ]
    //     ]);
    // }

    public function getAll()
    {
        $this->_client = new Client();
        $response = $this->_client->request('GET', 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCbBZsh5gW0fcmJzd6bRtFhA&key=AIzaSyDH3oeFy1RnagnQEyPYdXVP3p1V2ka7FXY');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['items'][0]['snippet']['thumbnails']['default']['url'];
    }
}
