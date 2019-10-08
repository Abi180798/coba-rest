<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Youtube extends CI_Controller
{
    public function index()
    {
        $this->load->model('Youtube_model', 'ymod');
        $hasil['data'] = $this->ymod->getAll();
        $this->load->view('you', $hasil);
    }
}
