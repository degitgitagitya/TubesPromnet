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
		$this->load->view('beli');
		$this->load->view('footer');
	}

	function store(){


	}
}
