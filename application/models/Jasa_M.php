<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 4:54 PM
 */

class Jasa_M extends CI_Model{

	function __construct(){

	}

	function getAll(){

		return $this->db->get('referensijasa');
	}

	function getView($id){

		return $this->db->query("SELECT transaksijasa.id, referensijasa.kategori,referensijasa.harga_jasa FROM transaksijasa, referensijasa WHERE transaksijasa.id_referensi_jasa = referensijasa.id AND transaksijasa.id_pelanggan = '". $id ."';");
	}

	function insert($id_referensi_jasa, $id_pelanggan){

		$data = array(
			'id_referensi_jasa' => $id_referensi_jasa,
			'id_pelanggan' => $id_pelanggan
		);

		$this->db->insert('transaksijasa', $data);
	}

	function delete($id_transaksi_jasa){

		$this->db->where('id', $id_transaksi_jasa);
		$this->db->delete('transaksijasa');
	}
}
