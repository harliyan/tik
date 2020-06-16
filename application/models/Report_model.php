<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends CI_Model
{
	public function getUser()
	{
		$query = "SELECT `user` .*, `user_role`.`role`
		FROM `user` JOIN `user_role`
		ON `user`. `role_id` = `user_role`.`id`
		";

		return $this->db->query($query)->result_array();
	}

	public function getReport()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.cluster' , 'left' );
		$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
		$query = $this->db->get ();
		return $query->result_array ();
	}

	public function getReportUtara()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.cluster' , 'left' );
		$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
		$where = "id_kecamatan='1'";
		$this->db->where($where);
		$query = $this->db->get ();
		return $query->result_array ();
	}

	public function getReportTimur()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.cluster' , 'left' );
		$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
		$where = "id_kecamatan='2'";
		$this->db->where($where);
		$query = $this->db->get ();
		return $query->result_array ();
	}

	public function getReportSelatan()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.cluster' , 'left' );
		$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
		$where = "id_kecamatan='3'";
		$this->db->where($where);
		$query = $this->db->get ();
		return $query->result_array ();
	}

	public function getReportBarat()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.cluster' , 'left' );
		$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
		$where = "id_kecamatan='4'";
		$this->db->where($where);
		$query = $this->db->get ();
		return $query->result_array ();
	}

	public function mpdfall()
	{
		$this->db->select ( '*' ); 
		$this->db->from ( 'data' );
		$this->db->join ( 'data2', 'data2.id = data.id' , 'left' );
		$this->db->join ( 'cluster', 'cluster.id = data.cluster' , 'left' );
		$this->db->join ( 'opd', 'opd.id = data.opd' , 'left' );
		$query = $this->db->get ();
		return $query->result_array ();
	}
}
