<?php
class visi_misi extends CI_Controller{
	function __construct(){
		parent::__construct();

	}
	function index(){
		$x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();
			$this->load->view('template/header',$x);
			$this->load->view('depan/v_home',$x);
			$this->load->view('template/footer',$x);
	}
}