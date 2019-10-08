<?php

class Barang_model extends CI_Model
{
    public function getBarang($id = null)
    {
        if ($id === null) {

            return $this->db->get('barang')->result_array();
        } else {
            return $this->db->get_where('barang', ['id_barang' => $id])->result_array();
        }
    }
    public function delBarang($id)
    {
        $this->db->delete('barang', ['id_barang' => $id]);
        return $this->db->affected_rows();
    }
    public function addBarang($data)
    {
        $this->db->insert('barang', $data);
        return $this->db->affected_rows();
    }
    public function editBarang($data, $id)
    {
        $this->db->update('barang', $data, ['id_barang' => $id]);
        return $this->db->affected_rows();
    }
}
