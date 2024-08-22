<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_gate extends CI_Model
{

  public function cari_data_in()
  {
    $cari = $this->input->post('cari', true);
    $this->db->like('potolog', $cari);
    $this->db->or_like('plat', $cari);
    $this->db->or_like('jam', $cari);
    $this->db->or_like('tanggal', $cari);
    return $this->db->get('masuk')->result_array();
  }
  public function cari_data_out()
  {
    $cari = $this->input->post('cari', true);
    $this->db->like('potolog', $cari);
    $this->db->or_like('plat', $cari);
    $this->db->or_like('jam', $cari);
    $this->db->or_like('tanggal', $cari);
    return $this->db->get('keluar')->result_array();
  }

	// akhir
}