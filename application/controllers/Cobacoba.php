<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cobacoba extends CI_Controller
{
    public function index()
    {
        $this->load->model('Coba_model', 'modelnya');
        $hasil['data'] = $this->modelnya->getAll();
        // var_dump($hasil['data']);
        $this->load->view('barang', $hasil);
    }
}
