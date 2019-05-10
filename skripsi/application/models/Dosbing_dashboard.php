<?php
class Dosbing_dashboard extends CI_Model {

 public function dashboard()
 {
  $this->db->select('*'); 
  $query=$this->db->get('tb_proposal');
  return $query->result();
 }

 public function get_search_proposal($proposal)
	{
		$this->db->select('*');
		$this->db->where('id_proposal',$proposal);
		$res2 = $this->db->get('tb_proposal');
		return $res2;
	}

 public function get_proposal_rmk($rmk)
	{
		$this->db->select('*');
		$this->db->where('rmk',$rmk);
	    $query = $this->db->get('tb_proposal');
	    return $query->result();

	}

}