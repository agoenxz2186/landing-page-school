<?php 
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}

	function simpan_siswa($nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_kelas_id,siswa_photo) VALUES ('$nis','$nama','$jenkel','$kelas','$photo')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_kelas_id) VALUES ('$nis','$nama','$jenkel','$kelas')");
		return $hsl;
	}

	function update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas',siswa_photo='$photo' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}

	public function get_siswa() {
		// Constructing the query using CI Query Builder
		$this->db->select('tbl_siswa.*, tbl_kelas.kelas_nama');
		$this->db->from('tbl_siswa');
		$this->db->join('tbl_kelas', 'tbl_siswa.siswa_kelas_id = tbl_kelas.kelas_id');
		$query = $this->db->get();
	
		return $query->result_array(); // Return result as array of objects
	}
	

	
}