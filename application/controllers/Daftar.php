<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function index()
	{
		$this->load->view('daftar');
		$this->load->model('user_model');
	}
	public function user()
	{
		if ($this->input->post('user')) {
	        $this->form_validation->set_rules('username','Nama Lengkap'			,'trim|required') ;
	        $this->form_validation->set_rules('email'	,'Email'				,'trim|min_length[3]|max_length[30]|required') ;
	        $this->form_validation->set_rules('telp'	,'Nomor Telepon'		,'trim|min_length[8]|max_length[11]|required') ;
	        $this->form_validation->set_rules('alamat'	,'Alamat Tempat Tinggal','trim|required') ;
	        $this->form_validation->set_rules('password','Kata Sandi'			,'trim|required|min_length[6]');
	        if ($this->form_validation->run() == TRUE ) {
	        	if ($this->user_model->insert()==TRUE) {
	        		redirect('Masuk');
	        	} else {
	        		redirect('Daftar');
	        	}
	        } else {
              	redirect('Daftar');
	        }
		}else {
	      	redirect('Daftar');
		}
	}
	public function tampung()
	{
		$config['upload_path'] = './uploads/penampungan/';
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';
    	$config['max_size'] = '4000';

    	$this->load->library('upload', $config);
    	if($this->session->userdata('logged_in') == TRUE){
    		if($this->upload->do_upload('foto')){
				if($this->admin_model->tambah_admin($this->upload->data()) == TRUE){
					$data ['penampungan'] = $this->user_model->get_data_penampungan();
					redirect('Masuk');	
	   			}else{
					redirect('Daftar');
				}
			} else {
				redirect('Daftar');
    		}
		}else{
			redirect('Daftar');
		}
	}
}
