<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BarangJualModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

    public function insertBarangJual(){
      $bahan=array(
        'NamaPaket'=>$this->input->post('NamaPaket'),
        'isi'=>$this->input->post('isi'),
        'hargaSatuan'=>$this->input->post('hargaSatuan')
      );
        $this->db->insert('barangjual',$bahan);

    }

    public function bahanJumlah()
    {
        //$query=$this->db->get('bahanbaku');
        $query = $this->db->query("SELECT jumlah * hargasatuan AS total FROM bahanbaku");
        return $query->result_array();
    }

    public function ListBarangJual()
    {
      $query=$this->db->get('barangjual');
      return $query->result();
    }


}
?>
