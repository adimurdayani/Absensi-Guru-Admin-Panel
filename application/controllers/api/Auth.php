<?php
defined('BASEPATH') or exit('No direct script access allowed');

use \Firebase\JWT\JWT;

class Auth extends BD_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function login_post()
  {
    $email = $this->post('email'); //data input username
    $password = sha1($this->post('password')); //data input password
    $user_arr = array('email' => $email);

    $val = $this->db->get_where('tb_guru', $user_arr)->row();

    if ($this->db->get_where('tb_guru', $user_arr)->num_rows() == 0) {

      $this->response([
        'status' => 0,
        'message' => 'Email tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }

    $match = $val->password; //mengambil data password dari database

    if ($password == $match) { //kondisi jika password yang di input sama dengan password yang ada di database

      $this->response([
        'status' => 1,
        'message' => 'Login sukses',
        'data' => $val
      ], REST_Controller::HTTP_OK); //response jika data berhasil digunakan untuk login

    } else {

      $this->response([
        'status' => 0,
        'message' => 'Password salah'
      ], REST_Controller::HTTP_BAD_REQUEST); //response jika data tidak ditemukan

    }
  }

  public function register_post()
  {
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');

    if ($this->form_validation->run() == FALSE) {

      if (validation_errors() == true) {
        # response ketika username sudah digunakan 
        $this->response([
          'status' => 0,
          'message' => 'Input data salah'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    } else {
      # inisial data yang akan di input kedalam database
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => sha1($this->input->post('password')),
        'created_at' => date('d M Y')
      ];

      $output = $this->db->insert('tb_guru', $data);

      if ($output == 0) {
        // response ketika data gagal di simpan
        $this->response([
          'status' => 0,
          'message' => 'Data gagal di simpan'
        ], REST_Controller::HTTP_NOT_FOUND);
      } else {
        // response ketika data berhasil disimpan
        $this->response([
          'status' => 1,
          'message' => 'Data berhasil di simpan',
          'data' => $data
        ], REST_Controller::HTTP_OK);
      }
    }
  }
}

/* End of file Auth.php */