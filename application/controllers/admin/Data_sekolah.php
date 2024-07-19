<?php
class Data_sekolah extends CI_Controller{
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
		$this->load->library('upload');
	}
    public function index(){
        $x['sekolah'] = $this->db->query('SELECT * FROM tbl_sekolah')->row();
		$this->load->view('admin/v_data_sekolah',$x);
    }
    public function edit() {
        // Load necessary libraries
        $this->load->library('upload');
    
        // Configuration for file upload
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;
    
        // Initialize upload library
        $this->upload->initialize($config);
    
        // Retrieve school data from POST
        $data = array(
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'alamat' => $this->input->post('alamat'),
            'handphone' => $this->input->post('handphone'),
            'email' => $this->input->post('email'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'youtube' => $this->input->post('youtube')
        );
    
        // Check if background file is uploaded
        if (!empty($_FILES['Background']['name'])) {
            // Perform upload
            if ($this->upload->do_upload('Background')) {
                // Upload success, process image
                $upload_data = $this->upload->data();
                
                // Get uploaded file name
                $background = $upload_data['file_name'];
    
                // Update data with uploaded file name
                $data['background'] = $background;
    
                // Delete old background file if exists
                $old_background = $this->input->post('old_background');
                if (!empty($old_background)) {
                    $old_background_path = './assets/images/' . $old_background;
                    if (file_exists($old_background_path)) {
                        unlink($old_background_path);
                    }
                }
            } else {
                // Upload failed, handle error
                $this->session->set_flashdata('msg', 'warning');
                redirect('admin/data_sekolah');
            }
        }
    
        // Check if logo file is uploaded
        if (!empty($_FILES['logo']['name'])) {
            // Perform upload
            if ($this->upload->do_upload('logo')) {
                // Upload success, process image
                $upload_data = $this->upload->data();
                
                // Get uploaded file name
                $logo = $upload_data['file_name'];
    
                // Update data with uploaded file name
                $data['logo'] = $logo;
    
                // Delete old logo file if exists
                $old_logo = $this->input->post('old_logo');
                if (!empty($old_logo)) {
                    $old_logo_path = './assets/images/' . $old_logo;
                    if (file_exists($old_logo_path)) {
                        unlink($old_logo_path);
                    }
                }
            } else {
                // Upload failed, handle error
                $this->session->set_flashdata('msg', 'warning');
                redirect('admin/data_sekolah');
            }
        }
    
        // Update database with new data
        $id = $this->input->post('id_sekolah');
        $this->db->where('id_sekolah', $id);
        $this->db->update('tbl_sekolah', $data);
    
        // Set flash message for success and redirect
        $this->session->set_flashdata('msg', 'success');
        redirect('admin/data_sekolah');
    }
    
}