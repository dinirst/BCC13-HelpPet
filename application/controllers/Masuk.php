<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
	$this->load->model('user_model');
	}
	public function index()
	{
		$this->load->view('masuk');
	}
	public function masuk()
	{	
		if($this->input->post('submit')){
    		if($this->user_model->cek_user() == TRUE)
			{
				//echo("hello");
				redirect('Beranda');
			}else{
				redirect('Masuk');
   			 }

		}else{
			$this->load->view('masuk');
   		}
	}
	public function logout(){
      $data = array(
        'username'   =>'',
        'logged_in' =>FALSE);
      $this->session->sess_destroy();
      redirect('Beranda');
    }

}
