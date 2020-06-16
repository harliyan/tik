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
		$query = "SELECT * FROM `data` LEFT JOIN `data2` ON `data2`.`id` = `data`.`id` LEFT JOIN `datagis` ON `datagis`.`id` = `data`.`id` LEFT JOIN `cluster` ON `datagis`.`cluster` = `cluster`.`id` LEFT JOIN `kecamatan` ON `kecamatan`.`id_kecamatan` = `data`.`id_kecamatan` LEFT JOIN `opd` ON `opd`.`id` = `data`.`opd` 
		";
		return $this->db->query($query)->result_array();
	}

	public function getReportUtara()
	{
		$query = "SELECT * FROM `data` LEFT JOIN `data2` ON `data2`.`id` = `data`.`id` LEFT JOIN `datagis` ON `datagis`.`id` = `data`.`id` LEFT JOIN `cluster` ON `datagis`.`cluster` = `cluster`.`id` LEFT JOIN `kecamatan` ON `kecamatan`.`id_kecamatan` = `data`.`id_kecamatan` LEFT JOIN `opd` ON `opd`.`id` = `data`.`opd` WHERE `data`.`id_kecamatan` = '1' 
		";
		return $this->db->query($query)->result_array();
	}

	public function getReportTimur()
	{
		$query = "SELECT * FROM `data` LEFT JOIN `data2` ON `data2`.`id` = `data`.`id` LEFT JOIN `datagis` ON `datagis`.`id` = `data`.`id` LEFT JOIN `cluster` ON `datagis`.`cluster` = `cluster`.`id` LEFT JOIN `kecamatan` ON `kecamatan`.`id_kecamatan` = `data`.`id_kecamatan` LEFT JOIN `opd` ON `opd`.`id` = `data`.`opd` WHERE `data`.`id_kecamatan` = '2' 
		";
		return $this->db->query($query)->result_array();
	}

	public function getReportSelatan()
	{
		$query = "SELECT * FROM `data` LEFT JOIN `data2` ON `data2`.`id` = `data`.`id` LEFT JOIN `datagis` ON `datagis`.`id` = `data`.`id` LEFT JOIN `cluster` ON `datagis`.`cluster` = `cluster`.`id` LEFT JOIN `kecamatan` ON `kecamatan`.`id_kecamatan` = `data`.`id_kecamatan` LEFT JOIN `opd` ON `opd`.`id` = `data`.`opd` WHERE `data`.`id_kecamatan` = '3' 
		";
		return $this->db->query($query)->result_array();
	}

	public function getReportBarat()
	{
		$query = "SELECT * FROM `data` LEFT JOIN `data2` ON `data2`.`id` = `data`.`id` LEFT JOIN `datagis` ON `datagis`.`id` = `data`.`id` LEFT JOIN `cluster` ON `datagis`.`cluster` = `cluster`.`id` LEFT JOIN `kecamatan` ON `kecamatan`.`id_kecamatan` = `data`.`id_kecamatan` LEFT JOIN `opd` ON `opd`.`id` = `data`.`opd` WHERE `data`.`id_kecamatan` = '4' 
		";
		return $this->db->query($query)->result_array();
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
