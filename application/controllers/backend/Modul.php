<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modul extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('m_data');
  }

  public function index()
  {
    $data['judul'] = 'Data Guru';
    $data['user_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_guru'] = $this->db->get('tb_guru')->result_array();
    $this->load->view('backend/layout/head', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/d_modul/tb_guru', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function detail_guru($id)
  {
    $data['judul'] = 'Detail Guru';
    $data['user_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_guru'] = $this->db->get_where('tb_guru', ['id' => $id])->row_array();
    $this->load->view('backend/layout/head', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/d_modul/tb_guru_detail', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function tambah_guru()
  {
    $data['judul'] = 'Data Guru';
    $data['user_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

    $this->form_validation->set_rules('nip', 'nip', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
    $this->form_validation->set_rules('t_lahir', 'tempat lahir', 'trim|required');
    $this->form_validation->set_rules('tgl_lahir', 'tanggal lahir', 'trim|required');
    $this->form_validation->set_rules('agama', 'agama', 'trim|required');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
    $this->form_validation->set_rules('status_kepegawaian', 'status kepegawaian', 'trim|required');
    $this->form_validation->set_rules('mapel', 'mapel', 'trim|required');
    $this->form_validation->set_rules('sertifikasi', 'sertifikasi', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/head', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/d_modul/tb_tambah_guru', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $config['upload_path']    = './assets/images/guru/';
      $config['allowed_types']  = 'jpg|png|jpeg';
      $config['max_size']       = '1024';
      $config['encrypt_name']    = TRUE;

      $this->load->library('upload', $config);

      if (!empty($_FILES['image'])) {
        # code...
        $this->upload->do_upload('image');
        $image = $this->upload->data();
        $file_image = $image['file_name'];
      }

      $data = [
        'nip' => $this->input->post('nip'),
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'password' => sha1($this->input->post('password')),
        'kelamin' => $this->input->post('kelamin'),
        't_lahir' => $this->input->post('t_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'agama' => $this->input->post('agama'),
        'alamat' => $this->input->post('alamat'),
        'pendidikan' => $this->input->post('pendidikan'),
        'jabatan' => $this->input->post('jabatan'),
        'status_kepegawaian' => $this->input->post('status_kepegawaian'),
        'mapel' => $this->input->post('mapel'),
        'sertifikasi' => $this->input->post('sertifikasi'),
        'created_at' => date("d M Y"),
        'image' => $file_image
      ];

      $this->db->insert('tb_guru', $data);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> data anda telah tersimpan.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>');
      redirect('backend/modul');
    }
  }

  public function edit_guru($id)
  {
    $data['judul'] = 'Data Guru';
    $data['user_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_id_guru'] = $this->db->get_where('tb_guru', ['id' => $id])->row_array();

    $this->form_validation->set_rules('nip', 'nip', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
    $this->form_validation->set_rules('t_lahir', 'tempat lahir', 'trim|required');
    $this->form_validation->set_rules('tgl_lahir', 'tanggal lahir', 'trim|required');
    $this->form_validation->set_rules('agama', 'agama', 'trim|required');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
    $this->form_validation->set_rules('status_kepegawaian', 'status kepegawaian', 'trim|required');
    $this->form_validation->set_rules('mapel', 'mapel', 'trim|required');
    $this->form_validation->set_rules('sertifikasi', 'sertifikasi', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/head', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/d_modul/tb_edit_guru', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {

      $id = $this->input->post('id');

      $config['upload_path']    = './assets/images/guru/';
      $config['allowed_types']  = 'jpg|png|jpeg';
      $config['max_size']       = '1024';
      $config['encrypt_name']    = TRUE;

      $this->load->library('upload', $config);

      if (!empty($_FILES['image'])) {
        # code...
        $this->upload->do_upload('image');
        $image = $this->upload->data();
        $file_image = $image['file_name'];
      }
      # code...

      $data = [
        'nip' => $this->input->post('nip'),
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'password' => sha1($this->input->post('password')),
        'kelamin' => $this->input->post('kelamin'),
        't_lahir' => $this->input->post('t_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'agama' => $this->input->post('agama'),
        'alamat' => $this->input->post('alamat'),
        'pendidikan' => $this->input->post('pendidikan'),
        'jabatan' => $this->input->post('jabatan'),
        'status_kepegawaian' => $this->input->post('status_kepegawaian'),
        'mapel' => $this->input->post('mapel'),
        'sertifikasi' => $this->input->post('sertifikasi'),
        'created_at' => date("d M Y"),
        'image' => $file_image
      ];

      $this->db->where('id', $id);
      $this->db->update('tb_guru', $data);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> data anda telah terupdate.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>');
      redirect('backend/modul');
    }
  }

  public function hapus_guru($id)
  {
    $this->db->delete('tb_guru', ['id' => $id]);
    $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> data anda telah terhapus.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>');
    redirect('backend/modul');
  }

  public function absen()
  {
    $data['judul'] = 'Data Absensi';
    $data['user_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_absen'] = $this->m_data->get_all_absen();
    $data['get_jadwal'] = $this->db->get('tb_jadwal')->row_array();
    $this->load->view('backend/layout/head', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/d_modul/tb_absensi', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function hapus_absen($id)
  {
    $this->db->delete('tb_absen', ['id' => $id]);
    $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> data anda telah terhapus.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>');
    redirect('backend/modul/absen');
  }
  public function jadwal()
  {
    $data['judul'] = 'Data Jadwal';
    $data['user_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_jadwal'] = $this->db->get('tb_jadwal')->result_array();
    $this->load->view('backend/layout/head', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/d_modul/tb_jadwal', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function tambah_jadwal()
  {
    $data['judul'] = 'Hapus Jadwal';
    $data['user_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_jadwal'] = $this->db->get('tb_jadwal')->result_array();
    $this->form_validation->set_rules('jam_masuk', 'jam masuk', 'trim|required');
    $this->form_validation->set_rules('jam_pulang', 'jam pulang', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/head', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/d_modul/tb_jadwal', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'jam_masuk'  => $this->input->post('jam_masuk'),
        'jam_pulang'  => $this->input->post('jam_pulang')
      ];

      $this->db->insert('tb_jadwal', $data);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> data anda telah tersimpan.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>');
      redirect('backend/modul/jadwal');
    }
  }

  public function edit_jadwal()
  {
    $data['judul'] = 'Hapus Jadwal';
    $data['user_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_jadwal'] = $this->db->get('tb_jadwal')->result_array();
    $this->form_validation->set_rules('jam_masuk', 'jam masuk', 'trim|required');
    $this->form_validation->set_rules('jam_pulang', 'jam pulang', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/head', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/d_modul/tb_jadwal', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');

      $data = [
        'jam_masuk'  => $this->input->post('jam_masuk'),
        'jam_pulang'  => $this->input->post('jam_pulang')
      ];

      $this->db->where('id', $id);
      $this->db->update('tb_jadwal', $data);
      $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> data anda telah terupdate.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>');
      redirect('backend/modul/jadwal');
    }
  }

  public function hapus_jadwal($id)
  {
    $this->db->delete('tb_jadwal', ['id' => $id]);
    $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> data anda telah terhapus.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>');
    redirect('backend/modul/jadwal');
  }
}

/* End of file Modeul.php */