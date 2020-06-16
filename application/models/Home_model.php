	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home_model extends CI_Model {

		public function peta() {

			$this->db->select ( '*' ); 
			$this->db->from ( 'data' );
			$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
			$this->db->join ( 'kecamatan', 'kecamatan.id_kecamatan = data.id_kecamatan' , 'left' );
			$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
			$this->db->join ( 'gis', 'gis.id = data.gis' , 'left' );
			$query = $this->db->get ();
			return $query->result ();
		}

		public function peta2() {
			$this->db->select('data.*, data2.*');
			$this->db->from('data');
			$this->db->join('data2', 'data.id = data2.id');
			return $this->db->get()->result();
		}

		public function utara() {
			$this->db->select('data.*, data2.*');
			$this->db->from('data');
			$this->db->join('data2', 'data.id = data2.id');
			$where = "id_kecamatan='2'";
			$this->db->where($where);
			return $this->db->get()->result();
		}

		public function timur() {
			$this->db->select('data.*, data2.*');
			$this->db->from('data');
			$this->db->join('data2', 'data.id = data2.id');
			$where = "id_kecamatan='3'";
			$this->db->where($where);
			return $this->db->get()->result();
		}

		public function selatan() {
			$this->db->select('data.*, data2.*');
			$this->db->from('data');
			$this->db->join('data2', 'data.id = data2.id');
			$where = "id_kecamatan='4'";
			$this->db->where($where);
			return $this->db->get()->result();
		}

		public function barat() {
			$this->db->select('data.*, data2.*');
			$this->db->from('data');
			$this->db->join('data2', 'data.id = data2.id');
			$where = "id_kecamatan='1'";
			$this->db->where($where);
			return $this->db->get()->result();
		}

	// search
		public function get_product_keyword_home($keyword){
			$this->db->select('data.*, data2.*');
			$this->db->from('data');
			$this->db->join('data2', 'data.id = data2.id');
			$where = "id_kecamatan='1'";
			$this->db->where($where);
			$this->db->like('nama_telecenter',$keyword);
			$this->db->or_like('nama_pengelola',$keyword);
			return $this->db->get()->result();
		}
	// end search

		public function edit_details($where,$table){

			return $this->db->get_where($table, $where);
		}

		public function update_details($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		public function hapus($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function getDetail($table, $id)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->join('data2', 'data.id = data2.id','left');
			$this->db->where('data2.id',$id);
			return $this->db->get()->result();
		}

		public function get_barat_count() {
			$sql = " SELECT count(*) as count from data where id_kecamatan = '4' " ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_utara_count() {
			$sql = " SELECT count(*) as count from data where id_kecamatan = '1' " ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_timur_count() {
			$sql = " SELECT count(*) as count from data where id_kecamatan = '2' " ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_selatan_count() {
			$sql = " SELECT count(*) as count from data where id_kecamatan = '3' " ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_all_count() {
			$sql = " SELECT count(*) as count from data" ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_cluster_count() {
			$sql = " SELECT count(*) as count from cluster" ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_jointing_count() {
			$sql = " SELECT count(*) as count from jointing" ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_konverter_s() {
			$sql = " SELECT count(*) as count from data where jenis_konverter = 'single' " ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_konverter_d() {
			$sql = " SELECT count(*) as count from data where jenis_konverter = 'double' " ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_up() {
			$sql = " SELECT count(*) as count from data where kondisi = 'up' " ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_down() {
			$sql = " SELECT count(*) as count from data where kondisi = 'down' " ;
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_home() {
			$sql = " SELECT count(*) as count from data where ket_1 = 'Belum Ada Status' " ;
			$data = $this->db->query($sql);

			return $data->result();
		}

		public function cluster(){
			$data = $this->db->query("SELECT * FROM cluster");
			return $data->result_array();
		}

		public function jointing(){
			$data = $this->db->query("SELECT * FROM jointing");
			return $data->result_array();
		}

		public function location2(){
			$data = $this->db->query("SELECT data.opd, data2.latitude, data2.longitude from data INNER JOIN data2 ON data.id = data2.id");
			return $data->result_array();
		}

		public function location()
		{
			$this->db->select ( '*' ); 
			$this->db->from ( 'data' );
			$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
			$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
			$query = $this->db->get ();
			return $query->result_array ();
		}
		public function edit_cluster($id,$cluster){
			$hasil=$this->db->query("UPDATE cluster SET cluster='$cluster' WHERE id='$id'");
			return $hsl;
		}

		public function delete_cluster($id)
		{
			$hasil = $this->db->query("DELETE FROM cluster WHERE id='$id'");
			return $hasil;
		}

		public function getDetails($table, $id)
		{
			$data = $this->db->query("SELECT * FROM data WHERE cluster='$id'");
			return $data->result_array();
		}

		public function getcluster($table, $id)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where('id', $id);
			return $this->db->get()->result();
		}

		public function opd(){
			$data = $this->db->query("SELECT * FROM opd");
			return $data->result_array();
		}

	}