<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function getUser()
	{
		$query = "SELECT `user` .*, `user_role`.`role`
		FROM `user` JOIN `user_role`
		ON `user`. `role_id` = `user_role`.`id`
		";

		return $this->db->query($query)->result_array();
	}

	public function hapus($id)
	{
		$hasil = $this->db->query("DELETE FROM user_menu WHERE id='$id'");
		return $hasil;
	}

	public function hapus_user($id)
	{
		$hasil = $this->db->query("DELETE FROM user WHERE id='$id'");
		return $hasil;
	}

	public function hapusRole($id)
	{
		$hasil = $this->db->query("DELETE FROM user_role WHERE id='$id'");
		return $hasil;
	}
}
