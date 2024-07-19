<?php
class Landing extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		if($this->session->userdata('akses') == '2'){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->library('upload');
	}


	function index()
	{
		$x['slider'] = $this->db->query('SELECT * FROM tbl_slider')->result();
		$x['content'] = $this->db->query('SELECT * FROM tbl_home')->result();
		$x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();

		$this->load->view('admin/v_home', $x);
	}

	function edit_content_home($id)
	{
		$x['slider'] = $this->db->query('SELECT * FROM tbl_slider')->result();
		$x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();
		$x['slider'] =  $this->db->query('SELECT * FROM tbl_slider')->result();
		$x['content'] = $this->db->query("SELECT * FROM tbl_home where id=$id")->row();
		$this->load->view('admin/v_home_edit', $x);
	}
	function tambah_slider()
	{
		$config['upload_path'] = './assets/images/slider';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if ($this->upload->do_upload('gambar')) {
			$gbr = $this->upload->data();
			//Compress Image
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/images/slider' . $gbr['file_name'];
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['new_image'] = './assets/images/' . $gbr['file_name'];

			$judul = strip_tags($this->input->post('judul'));
			$kalimat = strip_tags($this->input->post('kalimat'));
			$photo = $gbr['file_name'];

			$query = "INSERT INTO tbl_slider (judul, kalimat, gambar) VALUES (?, ?, ?)";
			$this->db->query($query, array($judul, $kalimat, $photo));
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/landing');
		} else {
			$this->session->set_flashdata('msg', 'error');
			redirect('admin/landing');
		}
	}

	function update_slider()
	{
		$kode = $this->input->post('id');
		$judul = strip_tags($this->input->post('judul'));
		$kalimat = strip_tags($this->input->post('kalimat'));

		// Ambil nama file lama dari database
		$query_file = $this->db->get_where('tbl_slider', array('slider_id' => $kode));
		$row = $query_file->row();
		$nama_file_lama = $row->gambar;

		// Konfigurasi upload
		$config['upload_path'] = './assets/images/slider/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		// Inisialisasi ulang konfigurasi upload
		$this->upload->initialize($config);

		if ($this->upload->do_upload('foto')) {
			// Upload berhasil
			$gbr = $this->upload->data();

			// Hapus file lama jika ada
			if (!empty($nama_file_lama) && file_exists('./assets/images/slider/' . $nama_file_lama)) {
				unlink('./assets/images/slider/' . $nama_file_lama);
			}

			// Update data slider dengan nama gambar baru
			$query = "UPDATE tbl_slider SET judul = ?, kalimat = ?, gambar = ? WHERE slider_id = ?";
			$this->db->query($query, array($judul, $kalimat, $gbr['file_name'], $kode));

			$this->session->set_flashdata('msg', 'success');
			redirect('admin/landing');
		} else {
			// Upload gagal
			$error = array('error' => $this->upload->display_errors());
			print_r($error); // Untuk debugging, bisa dihapus atau dikustomisasi tampilannya

			// Jika tidak ada gambar yang diupload, tetap lanjutkan update tanpa gambar
			$query = "UPDATE tbl_slider SET judul = ?, kalimat = ? WHERE slider_id = ?";
			$this->db->query($query, array($judul, $kalimat, $kode));

			$this->session->set_flashdata('msg', 'info');
			redirect('admin/landing');
		}
	}


	function hapus_slider()
	{
		$kode = $this->input->post('id');
		$gambar = $this->input->post('gambar');
		$path = './assets/images/slider/' . $gambar;
		unlink($path);
		$this->db->query("DELETE FROM tbl_slider WHERE slider_id='$kode'");
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/landing');
	}

	function tambah_content_home()
	{
		$judul = htmlspecialchars($this->input->post('judul'));
		$content = $this->input->post('content'); // Tidak perlu strip_tags() di sini

		$data = array(
			'judul_content' => $judul,
			'content' => $content
		);

		$this->db->insert('tbl_home', $data);

		$this->session->set_flashdata('msg', 'Data berhasil ditambahkan');

		redirect('admin/landing');
	}

	function update_content_home($id)
	{
		$judul = strip_tags($this->input->post('judul'));
		$content = $this->input->post('content');
		$data = array(
			'judul_content' => $judul,
			'content' => $content
		);
		$this->db->where('id', $id); // Sesuaikan dengan nama kolom ID di tabel Anda
		$this->db->update('tbl_home', $data);

		$this->session->set_flashdata('msg', 'Data berhasil diupdate');

		redirect('admin/landing');
	}
	function hapus_content_home($id)
	{


		$this->db->where('id', $id); // Sesuaikan dengan nama kolom ID di tabel Anda
		$this->db->delete('tbl_home');

		$this->session->set_flashdata('msg', 'Data berhasil dihapus');

		redirect('admin/landing');
	}

	function about()
	{
		$x['content'] = $this->db->query('SELECT * FROM tbl_about')->result();
		$x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();

		$this->load->view('admin/v_about', $x);
	}

	function edit_content_about($id)
	{
		$x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();
		$x['content'] = $this->db->query("SELECT * FROM tbl_about where id=$id")->row();
		$this->load->view('admin/v_about_edit', $x);
	}
	function tambah_content_about()
	{
		$judul = htmlspecialchars($this->input->post('judul'));
		$content = $this->input->post('content'); // Tidak perlu strip_tags() di sini

		$data = array(
			'judul_content' => $judul,
			'content' => $content
		);

		$this->db->insert('tbl_about', $data);

		$this->session->set_flashdata('msg', 'Data berhasil ditambahkan');

		redirect('admin/landing/about');
	}
	function update_content_about($id)
	{
		$judul = strip_tags($this->input->post('judul'));
		$content = $this->input->post('content');
		$data = array(
			'judul_content' => $judul,
			'content' => $content
		);
		$this->db->where('id', $id); // Sesuaikan dengan nama kolom ID di tabel Anda
		$this->db->update('tbl_about', $data);

		$this->session->set_flashdata('msg', 'Data berhasil diupdate');

		redirect('admin/landing/about');
	}
}
