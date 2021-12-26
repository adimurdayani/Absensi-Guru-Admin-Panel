<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends BD_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $data_guru = $this->db->get('tb_guru')->result_array();
        } else {
            $data_guru = $this->db->get_where('tb_guru', ['id' => $id])->row_array();
        }

        if ($data_guru) {
            # response laporan jika data laporan ada, dan menampilkan semua data laporan
            $this->response([
                'status'  => 1,
                'guru'    => $data_guru,
                'message' => 'sukses'
            ], REST_Controller::HTTP_OK);
        } else {
            # response laporan jika laporan tidak ada
            $this->response([
                'status'  => 0,
                'message' => 'data tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post()
    {
        $this->form_validation->set_rules('nip', 'nip', 'trim|required');
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

            if (validation_errors() == true) {

                # response ketika username sudah digunakan 
                $this->response([
                    'status' => 0,
                    'message' => validation_errors()
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $id = $this->input->post('id');

            $data = [
                'nip' => $this->input->post('nip'),
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
                'created_at' => date("d M Y")
            ];
            $this->db->where('id', $id);

            $output = $this->db->update('tb_guru', $data);

            if ($output == 0) {
                // response ketika data gagal di simpan
                $this->response([
                    'status' => 0,
                    'message' => 'Data gagal disimpan'
                ], REST_Controller::HTTP_NOT_FOUND);
            } else {
                // response ketika data berhasil disimpan
                $this->response([
                    'status' => 1,
                    'message' => 'Data berhasil disimpan',
                    'data' => $data
                ], REST_Controller::HTTP_OK);
            }
        }
    }

    public function ubahpassword_post()
    {
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            if (validation_errors() == true) {

                # response ketika username sudah digunakan 
                $this->response([
                    'status' => 0,
                    'message' => validation_errors()
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $id = $this->input->post('id');
            $data = [
                'password' => sha1($this->input->post('password')),
                'created_at' => date("d M Y")
            ];
            $this->db->where('id', $id);
            $output = $this->db->update('tb_guru', $data);

            if ($output == 0) {
                // response ketika data gagal di simpan
                $this->response([
                    'status' => 0,
                    'message' => 'Data gagal disimpan'
                ], REST_Controller::HTTP_NOT_FOUND);
            } else {
                // response ketika data berhasil disimpan
                $this->response([
                    'status' => 1,
                    'message' => 'Data berhasil disimpan',
                    'data' => $data
                ], REST_Controller::HTTP_OK);
            }
        }
    }

    public function image_post()
    {
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
        } else {
            $this->response([
                'status' => 0,
                'message' => 'Gambar tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }

        $data = [
            'created_at' => date("d M Y"),
            'image' => $file_image
        ];

        $this->db->where('id', $id);
        $output = $this->db->update('tb_guru', $data);

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
