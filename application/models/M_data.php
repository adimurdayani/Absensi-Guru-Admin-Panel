<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{

  public function get_all_submenu()
  {
    $querysubmenu = "SELECT `tb_sub_menu`.*, `tb_menu`.`menu`
                      FROM `tb_sub_menu`
                      JOIN  `tb_menu` ON `tb_sub_menu`.`menu_id` = `tb_menu`.`id_menu`
                  ";
    return $this->db->query($querysubmenu)->result_array();
  }

  public function get_all_absen()
  {
    $querysubmenu = "SELECT `tb_absen`.*, `tb_guru`.`nama`
                      FROM `tb_absen`
                      JOIN  `tb_guru` ON `tb_absen`.`id_guru` = `tb_guru`.`id`
                      ORDER BY `tb_absen`.`id` DESC
                  ";
    return $this->db->query($querysubmenu)->result_array();
  }

  public function get_id_absen($id)
  {
    $querysubmenu = "SELECT `tb_absen`.*, `tb_guru`.`nama`
                      FROM `tb_absen`
                      JOIN  `tb_guru` ON `tb_absen`.`id_guru` = `tb_guru`.`id`
                      WHERE `tb_absen`.`id_guru` = $id
                      ORDER BY `tb_absen`.`id` DESC
                  ";
    return $this->db->query($querysubmenu)->result_array();
  }
}

/* End of file M_data.php */