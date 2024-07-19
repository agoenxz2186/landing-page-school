<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_siswa');
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
    }

    public function index() {
        $x['siswa'] = $this->m_siswa->get_siswa();
        $x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();
        $this->load->view('template/header',$x);
        $this->load->view('depan/v_siswa',$x);
        $this->load->view('template/footer',$x);
    }
}
?>
