<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends BD_Controller
{
    public function index_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $data_absen = $this->db->get('tb_jadwal')->row_array();
        } else {
            $data_absen = $this->db->get_where('tb_jadwal', ['id' => $id])->row_array();
        }

        if ($data_absen) {
            # response laporan jika data laporan ada, dan menampilkan semua data laporan
            $this->response([
                'status'  => 1,
                'jadwal'    => $data_absen,
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
}
