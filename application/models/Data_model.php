<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
	public function getSubMenubackup()
	{
		$query = "SELECT `user_sub_menu` .*, `user_menu`.`menu`
		FROM `user_sub_menu` JOIN `user_menu`
		ON `user_sub_menu`. `menu_id` = `user_menu`.`id`
		";

		return $this->db->query($query)->result_array();
	}

	public function getSubMenu() {

		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.id' , 'left' );
		$query = $this->db->get ();
		return $query->result ();
	}

	public function data()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.cluster' , 'left' );
		$query = $this->db->get ();
		return $query->result_array ();
	}

	public function datainv()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.cluster' , 'left' );
		$this->db->join ( 'kecamatan', 'kecamatan.id_kecamatan = data.id_kecamatan' , 'left' );
		$this->db->join ( 'jointing', 'jointing.id = data.jointing' , 'left' );
		$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
		$query = $this->db->get ();
		return $query->result_array ();
	}

	public function cluster_tampil() {
		$query = $this->db->get('cluster');
		return $query->result();
	}

	public function opd_tampil() {
		$query = $this->db->get('opd');
		return $query->result();
	}

	public function kecamatan_tampil() {
		$query = $this->db->get('kecamatan');
		return $query->result();
	}

	public function jointing_tampil() {
		$query = $this->db->get('jointing');
		return $query->result();
	}

	public function hapus($id)
	{
		$hasil = $this->db->query("DELETE FROM status_perangkat WHERE id_status='$id'");
		return $hasil;
	}

	public function edit_cluster($id,$cluster){
		$hasil=$this->db->query("UPDATE cluster SET cluster='$cluster'WHERE id='$id'");
		return $hsl;
	}

	public function edit_jointing($id,$jointing){
		$hasil=$this->db->query("UPDATE jointing SET jointing='$jointing'WHERE id='$id'");
		return $hsl;
	}

	public function edit_status($id_status,$status){
		$hasil=$this->db->query("UPDATE status_perangkat SET status='$status'WHERE id_status='$id_status'");
		return $hsl;
	}

	public function edit_opd($id,$opd,$opd_nama,$alamat,$email,$kontak){
		$hasil=$this->db->query("UPDATE opd 
			SET opd='$opd', opd_nama='$opd_nama', alamat='$alamat', email='$email', kontak='$kontak' WHERE id='$id'");
		return $hsl;
	}

	public function hapuscluster($id)
	{
		$hasil = $this->db->query("DELETE FROM cluster WHERE id='$id'");
		return $hasil;
	}

	public function hapusdata2($id)
	{
		$hasil = $this->db->query("DELETE FROM data WHERE id='$id'");
		$hasil = $this->db->query("DELETE FROM data2 WHERE id='$id'");
		return $hasil;
	}

	public function hapusdata($id)
	{
		$this->db->delete('data', array('id' => $id)); 
		$this->db->delete('data2', array('id' => $id));
	}

	public function hapusjointing($id)
	{
		$hasil = $this->db->query("DELETE FROM jointing WHERE id='$id'");
		return $hasil;
	}

	public function hapusopd($id)
	{
		$hasil = $this->db->query("DELETE FROM opd WHERE id='$id'");
		return $hasil;
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

}
