<?php
class Download extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_files');
		$this->load->helper('download');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['data']=$this->m_files->get_all_files();
		$x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();
			$this->load->view('template/header',$x);
			$this->load->view('depan/v_download',$x);
			$this->load->view('template/footer',$x);
	}

	function get_file(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_files->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./assets/files/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}

}
