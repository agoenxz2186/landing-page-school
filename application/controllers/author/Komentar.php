<?php
class Komentar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_kategori');
    }

    function index()
    {
        $id = $this->session->idadmin;

        $x['komentar'] = $this->db->query("SELECT tbl_komentar.*, 
                     tbl_tulisan.tulisan_judul, 
                     tbl_tulisan.tulisan_slug,
                     tbl_tulisan.tulisan_pengguna_id
              FROM tbl_komentar
              JOIN tbl_tulisan ON tbl_komentar.komentar_tulisan_id = tbl_tulisan.tulisan_id
              WHERE tbl_tulisan.tulisan_pengguna_id = '$id'
              ORDER BY tbl_komentar.komentar_id DESC")->result();
        $x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();

        $this->load->view('author/v_komentar', $x);
    }


    function publish()
    {
        $kode = htmlspecialchars($this->uri->segment(4), ENT_QUOTES);
        $this->db->query("UPDATE tbl_komentar SET komentar_status='1' WHERE komentar_id='$kode'");
        echo $this->session->set_flashdata('msg', 'success');
        redirect('author/komentar');
    }

    function reply()
    {
        $komentar_id = htmlspecialchars($this->input->post('komenid'), ENT_QUOTES);
        $nama = $this->session->userdata('nama');
        $tulisan_id = htmlspecialchars($this->input->post('postid'), ENT_QUOTES);
        $komentar = nl2br(htmlspecialchars($this->input->post('komentar', TRUE), ENT_QUOTES));
        $data = array(
            'komentar_nama'             => $nama,
            'komentar_email'             => '',
            'komentar_isi'                 => $komentar,
            'komentar_status'         => 1,
            'komentar_tulisan_id' => $tulisan_id,
            'komentar_parent'     => $komentar_id
        );

        $this->db->insert('tbl_komentar', $data);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('author/komentar');
    }

    function hapus()
    {
        $kode = $this->input->post('kode');
        $this->db->delete('tbl_komentar', array('komentar_id' => $kode));
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('author/komentar');
    }
}
