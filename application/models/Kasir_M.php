<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 2:28 PM
 */

class Kasir_M extends CI_Model {

	function __construct(){

	}

	function getAll(){

		return $this->db->get('kasir');
	}
}
