<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Barang extends CI_Controller
{
    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }
    public function __construct()
    {
        parent::__construct();
        $this->__resTraitConstruct();
        $this->load->model('Barang_model', 'brg');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $barang = $this->brg->getBarang();
        } else {
            $barang = $this->brg->getBarang($id);
        }
        if ($barang) {
            // Set the response and exit
            $coba = 1;
            $this->response([
                'status' => true,
                'data' => $barang,
                'coba' => "lala$coba",
            ], 200);
        } else {
            $this->response([
                'massage' => 'id not found'
            ], 404);
        }
    }
    public function index_delete()
    {
        $id = $this->delete('id');
        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], 400);
        } else {
            if ($this->brg->delBarang($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], 200);
            } else {
                $this->response([
                    'status' => false,
                    'massage' => 'id not found'
                ], 404);
            }
        }
    }
    public function index_post()
    {
        $data = [
            'id_barang' => $this->post('id_barang'),
            'nama_brg' => $this->post('nama_brg'),
            'id_admin' => $this->post('id_admin')
        ];
        if ($this->brg->addBarang($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new barang has been created'
            ], 201);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to create new data'
            ], 400);
        }
    }
    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'id_barang' => $this->put('id_barang'),
            'nama_brg' => $this->put('nama_brg'),
            'id_admin' => $this->put('id_admin')
        ];
        if ($this->brg->editBarang($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'data barang has been updated'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to create new data'
            ], 400);
        }
    }
}
