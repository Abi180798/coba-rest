<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
        $id = $this->input->post('id');
        $name = $this->input->post('name');

        if ($id == "coba1") {
            var_dump("oke");
        }
    }
}
