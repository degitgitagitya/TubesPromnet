<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 3:49 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_C extends CI_Controller{

	function index(){
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home');
		$this->load->view('footer');
	}

	function store(){

		if (empty($_SESSION['id_transaksi'])){
			$data_session = array(
				'id_transaksi' => "T".$this->input->post('stnk').date("Y/m/d").rand(0,100),
				'id' => "P". $this->input->post('stnk'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'stnk' => $this->input->post('stnk'),
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis')
			);
		}

		$this->session->set_userdata($data_session);

		redirect(site_url('Service_C'));
	}
}
