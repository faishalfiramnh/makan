<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BahanBakuCont extends CI_Controller{
  public function __construct()
	{
        parent::__construct();
        $this->load->helper('date','url','form');
    $this->load->model('BahanBakuModel');

		$this->load->library('form_validation');



     }

     public function list()
     {
       $this->load->model('BahanBakuModel');
       $dataBahan['Bahan']=$this->BahanBakuModel->listBahan();
       $dataBahan['BhnBaru']=$this->BahanBakuModel->bahanJumlah();
       $this->load->view('BahanBaku/ListBahanBakuView', $dataBahan);
     }

     public function listBaru()
     {
       $this->load->model('BahanBakuModel');
       $dataBahan['BhnBaru']=$this->BahanBakuModel->bahanJumlah();
       $this->load->view('BahanBaku/QueryBahan', $dataBahan);
     }



     public function tambah()
     {
      //  $this->load->view('BahanBaku/TambahBahanView');
      $this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_bb', 'nama_bb', 'trim|required');

			$this->load->model('BahanBakuModel');
			if ($this->form_validation->run()==false)
			{
				//$this->load->view('boot');
				$this->load->view('bahanbaku/bahanbaku_list');
			}
			else
			{

					$this->BahanBakuModel->insertBahan();
					$this->load->view('Gagal');

			}

     }

}
 ?>
