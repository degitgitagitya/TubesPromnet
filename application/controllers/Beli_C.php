<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 4:13 PM
 */

class Beli_C extends CI_Controller{

	function index(){

		$this->load->view('header');
		$this->load->view('navbar');
		$data['referensipart'] = $this->Part_M->getAll()->result();
		$data['part'] = $this->Part_M->getView($_SESSION['id_transaksi'])->result();
		$this->load->view('beli',$data);
		$this->load->view('footer');
	}

	function add(){

		$id_referensi = $this->input->post('part');
		$quantity = $this->input->post('qty');
		$this->Part_M->insert($id_referensi,$_SESSION['id_transaksi'],$quantity);
		$this->index();
	}

	function remove($id){

		$this->Part_M->delete($id);
		$this->index();
	}
}
