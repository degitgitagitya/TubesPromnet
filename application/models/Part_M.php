<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/3/2018
 * Time: 2:51 PM
 */

class Part_M extends CI_Model{

	function __construct(){

	}

	function getAll(){

		return $this->db->get('referensipart');
	}

	function getView($id){

		return $this->db->query("SELECT transaksipart.id, referensipart.nama_part,referensipart.harga_part,transaksipart.quantity FROM transaksipart, referensipart WHERE transaksipart.id_referensi_part = referensipart.id AND transaksipart.id_transaksi = '". $id ."';");
	}

	function insert($id_referensi_part, $id_transaksi,$quantity){

		$data = array(
			'id_referensi_part' => $id_referensi_part,
			'id_transaksi' => $id_transaksi,
			'quantity' => $quantity
		);

		$this->db->insert('transaksipart', $data);
	}

	function delete($id_transaksi_part){

		$this->db->where('id', $id_transaksi_part);
		$this->db->delete('transaksipart');
	}
}
