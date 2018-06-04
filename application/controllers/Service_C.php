<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 3:54 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Service_C extends CI_Controller{

	function index(){
		$this->load->view('header');
		$this->load->view('navbar');
		$data['referensijasa'] = $this->Jasa_M->getAll()->result();
		$data['jasa'] = $this->Jasa_M->getView($_SESSION['id_transaksi'])->result();
		$this->load->view('service',$data);
		$this->load->view('footer');
	}

	function add(){

		$id_referensi = $this->input->post('kategori');
		$this->Jasa_M->insert($id_referensi,$_SESSION['id_transaksi']);
		$this->index();
	}

	function remove($id){

		$this->Jasa_M->delete($id);
		$this->index();
	}

}
