<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 2:02 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_C extends CI_Controller{

	function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	function verifikasi()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$kasir = $this->Kasir_M->getAll()->result();

		$sign = false;


		foreach ($kasir as $value){
			if ($username == $value->username && $password == $value->password)
			{
				$_SESSION['nama_kasir'] = $value->nama_kasir;
				$_SESSION['id_kasir'] = $value->id;
				$sign = true;
			}
		}

		if ($sign == true) {

			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('home');
			$this->load->view('footer');
		}else{

			$data['warning'] = "Kombinasi Salah";

			$this->load->view('header');
			$this->load->view('login',$data);
			$this->load->view('footer');
		}
	}
}
