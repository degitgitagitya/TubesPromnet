<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/3/2018
 * Time: 3:11 PM
 */

class Detail_C extends CI_Controller {

	function index(){

		$this->load->view('header');
		$this->load->view('navbar');
		$data['referensipart'] = $this->Part_M->getAll()->result();
		$data['part'] = $this->Part_M->getView($_SESSION['id_transaksi'])->result();
		$data['referensijasa'] = $this->Jasa_M->getAll()->result();
		$data['jasa'] = $this->Jasa_M->getView($_SESSION['id_transaksi'])->result();
		$this->load->view('detail',$data);
		$this->load->view('footer');
	}
}
