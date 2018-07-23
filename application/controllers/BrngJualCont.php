<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BrngJualCont extends CI_Controller{
  public function __construct()
	{
        parent::__construct();
        $this->load->helper('date','url','form');
    $this->load->model('BarangJualModel');

		$this->load->library('form_validation');



     }





     public function tambah()
     {
      //  $this->load->view('BahanBaku/TambahBahanView');
      $this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('NamaPaket', 'NamaPaket', 'trim|required');

			$this->load->model('BarangJualModel');
			if ($this->form_validation->run()==false)
			{
				//$this->load->view('boot');
				$this->load->view('Penjualan/TambahBarang');
			}
			else
			{

					$this->BarangJualModel->insertBarangJual();
					$this->load->view('berhasil');

			}

     }

     public function list()
     {
       $this->load->model('BarangJualModel');
       $jual['lihat']=$this->BarangJualModel->ListBarangJual();
       $this->load->view('BarangJualView', $jual);
     }

}
 ?>
