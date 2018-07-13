<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Penjualan extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Penjualan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');       
            $data['roles'] = $this->user_model->getUserRoles();

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'penjualan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'penjualan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'penjualan/index.html';
            $config['first_url'] = base_url() . 'penjualan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Penjualan_model->total_rows($q);
        $penjualan = $this->Penjualan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'penjualan_data' => $penjualan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
//        $this->load->view('penjualan/penjualan_list', $data);
        $this->global['pageTitle'] = 'Catering : Karyawan';
        $this->loadViews("penjualan/penjualan_list", $this->global, $data, NULL);
    }
    }

    public function read($id) 
    {
        $row = $this->Penjualan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_transaksi' => $row->id_transaksi,
		'idPelanggan' => $row->idPelanggan,
		'NamaBarang' => $row->NamaBarang,
		'JumlahSatuan' => $row->JumlahSatuan,
		'hargaSatuan' => $row->hargaSatuan,
		'totalPenjualan' => $row->totalPenjualan,
		'tanggal' => $row->tanggal,
	    );
            $this->load->view('penjualan/penjualan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penjualan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('penjualan/create_action'),
	    'id_transaksi' => set_value('id_transaksi'),
	    'idPelanggan' => set_value('idPelanggan'),
	    'NamaBarang' => set_value('NamaBarang'),
	    'JumlahSatuan' => set_value('JumlahSatuan'),
	    'hargaSatuan' => set_value('hargaSatuan'),
	    'totalPenjualan' => set_value('totalPenjualan'),
	    'tanggal' => set_value('tanggal'),
	);
        $this->load->view('penjualan/penjualan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idPelanggan' => $this->input->post('idPelanggan',TRUE),
		'NamaBarang' => $this->input->post('NamaBarang',TRUE),
		'JumlahSatuan' => $this->input->post('JumlahSatuan',TRUE),
		'hargaSatuan' => $this->input->post('hargaSatuan',TRUE),
		'totalPenjualan' => $this->input->post('totalPenjualan',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Penjualan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('penjualan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Penjualan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('penjualan/update_action'),
		'id_transaksi' => set_value('id_transaksi', $row->id_transaksi),
		'idPelanggan' => set_value('idPelanggan', $row->idPelanggan),
		'NamaBarang' => set_value('NamaBarang', $row->NamaBarang),
		'JumlahSatuan' => set_value('JumlahSatuan', $row->JumlahSatuan),
		'hargaSatuan' => set_value('hargaSatuan', $row->hargaSatuan),
		'totalPenjualan' => set_value('totalPenjualan', $row->totalPenjualan),
		'tanggal' => set_value('tanggal', $row->tanggal),
	    );
            $this->load->view('penjualan/penjualan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penjualan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_transaksi', TRUE));
        } else {
            $data = array(
		'idPelanggan' => $this->input->post('idPelanggan',TRUE),
		'NamaBarang' => $this->input->post('NamaBarang',TRUE),
		'JumlahSatuan' => $this->input->post('JumlahSatuan',TRUE),
		'hargaSatuan' => $this->input->post('hargaSatuan',TRUE),
		'totalPenjualan' => $this->input->post('totalPenjualan',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Penjualan_model->update($this->input->post('id_transaksi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('penjualan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Penjualan_model->get_by_id($id);

        if ($row) {
            $this->Penjualan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('penjualan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penjualan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idPelanggan', 'idpelanggan', 'trim|required');
	$this->form_validation->set_rules('NamaBarang', 'namabarang', 'trim|required');
	$this->form_validation->set_rules('JumlahSatuan', 'jumlahsatuan', 'trim|required');
	$this->form_validation->set_rules('hargaSatuan', 'hargasatuan', 'trim|required');
	$this->form_validation->set_rules('totalPenjualan', 'totalpenjualan', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

	$this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Penjualan.php */
/* Location: ./application/controllers/Penjualan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-06-27 03:27:07 */
/* http://harviacode.com */