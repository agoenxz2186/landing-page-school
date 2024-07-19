<?php
class M_sekolah extends CI_Model{
	function sekolah(){
		$hsl=$this->db->query("SELECT * FROM tbl_sekolah");
		return $hsl;
	}
}