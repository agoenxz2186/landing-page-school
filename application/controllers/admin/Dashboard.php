<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		if($this->session->userdata('akses') == '2'){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pengunjung');
	}
	function index(){
		if($this->session->userdata('akses')=='1'){
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();
			$this->load->view('admin/v_dashboard',$x);
		}else{
			redirect('administrator');
		}
	
	}
	
}