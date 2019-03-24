<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }
  public function cek_user()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $query = $this->db->where('email',$email)
                      ->where('password',md5($password))
                      ->get('user');
    if($query->num_rows()>0){
      $data  = array(
        'email' => $email,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($data);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function insert()
  {
    $data = array(
      'id_user'   => NULL,
      'username'  => $this->input->post('username'),
      'email'     => $this->input->post('email'),
      'telp'      => $this->input->post('telp'),
      'alamat'    => $this->input->post('alamat'),
      'password'  => md5($this->input->post('password'))
       );
    $this->db->insert('user', $data);

    if ($this->db->affected_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function get_data_user()
  {
    return $this->db->order_by('id_user','ASC')
						        ->get('user')
						        ->result();
  }

  public function tambah_penampungan($foto)
	{
		$data = array(
			'id_penampungan' 	=> NULL,
			'nm_penampungan'  => $this->input->post('nm_penampungan'),
			'email'			      => $this->input->post('email'),
      'password'		    => MD5($this->input->post('password')),
      'telp'            => $this->input->post('telp'),
			'alamat'		      => $this->input->post('alamat'),
			'foto'			      => $foto['file_name']
			);
		$this->db->insert('penampungan',$data);
		
		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function edit_penampungan($id_penampungan)
	{
		$data = array(
			'nm_penampungan'  => $this->input->post('nm_penampungan'),
			'email'			      => $this->input->post('email'),
      'password'		    => MD5($this->input->post('password')),
      'telp'            => $this->input->post('telp'),
			'alamat'		      => $this->input->post('alamat')
			);
		$this->db->where('id_penampungan',$id_penampungan)
				 ->update('penampungan',$data);
		
		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function edit_penampungan_foto($id_penampungan, $foto)
	{
		$data = array(
			'nm_penampungan'  => $this->input->post('nm_penampungan'),
			'email'			      => $this->input->post('email'),
      'password'		    => MD5($this->input->post('password')),
      'telp'            => $this->input->post('telp'),
			'alamat'		      => $this->input->post('alamat'),
			'foto'			      => $foto['file_name']
			);
		$this->db->where('id_penampungan',$id_penampungan)
				 ->update('penampungan',$data);
		
		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function get_data_penampungan()
	{
		return $this->db->order_by('id_penampungan','ASC')
						->get('penampungan')
						->result();
	}

	public function delete_penampungan($id_penampungan)
	{
		$this->db->where('id_penampungan',$id_penampungan)
				 ->delete('penampungan');

		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */