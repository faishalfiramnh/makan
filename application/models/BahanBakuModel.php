<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BahanBakuModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

    public function insertBahan(){
      $bahan=array(
        'nama_bb'=>$this->input->post('nama_bb'),
        'hargasatuan'=>$this->input->post('hargasatuan'),
        'jumlah'=>$this->input->post('jumlah')
      );
        $this->db->insert('bahanbaku',$bahan);

    }

    public function bahanJumlah()
    {
        //$query=$this->db->get('bahanbaku');
        $query = $this->db->query("SELECT jumlah * hargasatuan AS total FROM bahanbaku");
        return $query->result_array();
    }

    public function ListBahan()
    {
      $query=$this->db->get('bahanbaku');
      return $query->result();
    }


}
?>
