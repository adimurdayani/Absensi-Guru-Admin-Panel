<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_api extends CI_Model
{

  public function get_all_simpanan()
  {
    $querysimpanan = "SELECT `tb_simpan`.*, `tb_member`.`member_id`
                      FROM `tb_simpan`
                      JOIN  `tb_member` ON `tb_simpan`.`m_id` = `tb_member`.`id_m`
                  ";
    return $this->db->query($querysimpanan)->result_array();
  }
}

/* End of file M_api.php */