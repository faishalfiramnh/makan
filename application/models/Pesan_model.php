<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pesan_model extends CI_Model
{

public function insertPesan(){

    $bahan=array(
       'nama'=> $this->input->post('name'),
       'jenisPaket'=>$this->input->post('jenisPaket'),
       'harga'=>$this->input->post('total'),
       'jumlah'=>$this->input->post('jumlah')
    );
  $this->db->insert('jual',$bahan);

}

public function ListBarangJual()
{
  $query=$this->db->get('barangjual');
  return $query->result();
}

}



 ?>
