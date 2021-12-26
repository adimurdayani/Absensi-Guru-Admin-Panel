<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends BD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function index_get()
    {
        $id = $this->get('id_guru');

        if ($id === null) {
            $data_absen = $this->m_data->get_all_absen();
        } else {
            $data_absen = $this->m_data->get_id_absen($id);
        }

        if ($data_absen) {
            # response laporan jika data laporan ada, dan menampilkan semua data laporan
            $this->response([
                'status'  => 1,
                'absen'    => $data_absen,
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

    public function absenmasuk_post()
    {
        $this->form_validation->set_rules('id_guru', 'guru', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            if (validation_errors() == true) {

                # response ketika username sudah digunakan 
                $this->response([
                    'status' => 0,
                    'message' => validation_errors()
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            # inisial data yang akan di input kedalam database
            $data_jadwal = $this->db->get('tb_jadwal')->row();
            $awal = strtotime($data_jadwal->jam_masuk);
            $waktu = strtotime(date('H:i'));
            $diff = $waktu - $awal;

            $jam = floor($diff / (60 * 60));
            $menit = $diff - ($jam * (60 * 60));
            $detik = $diff % 60;

            $data = [
                'tanggal' => date('d M Y'),
                'id_guru' => $this->input->post('id_guru'),
                'jam_masuk' => $data_jadwal->jam_masuk,
                'jam_pulang' => $data_jadwal->jam_pulang,
                'absen_masuk' => date('H:i'),
                'terlambat' => $jam . ":" . floor($menit / 60) . ":" . $detik
            ];
            $output = $this->db->insert('tb_absen', $data);

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

    public function absenpulang_post()
    {
        $this->form_validation->set_rules('id_guru', 'guru', 'trim|required');

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
            # inisial data yang akan di input kedalam database
            $data = [
                'tanggal' => date('d M Y'),
                'id_guru' => $this->input->post('id_guru'),
                'absen_pulang' => date('H:i')
            ];
            $this->db->where('id', $id);
            $output = $this->db->update('tb_absen', $data);

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

    public function pulangcepat_post()
    {
        $this->form_validation->set_rules('id_guru', 'guru', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            if (validation_errors() == true) {

                # response ketika username sudah digunakan 
                $this->response([
                    'status' => false,
                    'message' => validation_errors()
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $id = $this->input->post('id');
            # inisial data yang akan di input kedalam database
            $data = [
                'tanggal' => date('d M Y'),
                'id_guru' => $this->input->post('id_guru'),
                'pulang_cepat' => date('H:i'),
            ];
            $this->db->where('id', $id);
            $output = $this->db->update('tb_absen', $data);

            if ($output == 0) {
                // response ketika data gagal di simpan
                $this->response([
                    'status' => false,
                    'message' => 'Data gagal di simpan'
                ], REST_Controller::HTTP_NOT_FOUND);
            } else {
                // response ketika data berhasil disimpan
                $this->response([
                    'status' => true,
                    'message' => 'Data berhasil di simpan',
                    'data' => $data
                ], REST_Controller::HTTP_OK);
            }
        }
    }
}
