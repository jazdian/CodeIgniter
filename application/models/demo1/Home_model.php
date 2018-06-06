<?php
//defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function get_menu_header($idsistem, $idsection)
    {
         $this->load->database();

         $query = $this->db->get_where('menu', array('id_sistem' => $idsistem, 'id_section' => $idsection));
         return $query->result();
    }

   public function get_data_page($id, $idsistem)
   {
      $this->load->database();

      $query = $this->db->get_where('pages', array('id' => $id, 'id_sistem' => $idsistem));
      return $query->result();

   }

}
