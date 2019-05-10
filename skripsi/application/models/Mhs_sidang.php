<?php
class Mhs_sidang extends CI_Model {


  public function sidang($id)
 {
 	  	$this->db->select('*'); 
 	  	$this->db->where('id_proposal',$id);
  		$query=$this->db->get('tbl_sidang');
  		return $query->result();
 }

/* public function index()
 {
    $this->db->select('*');
	$this->db->from('tb_proposal');
	$this->db->join('tbl_sidang', 'tbl_sidang.id_proposal = tb_proposal.id_proposal', 'left');
	$query = $this->db->get(); 
	return $query->result();
 }*/

 public function index()
 {
    $this->db->select('*,tb_proposal.id_proposal as id_proposal');
	$this->db->from('tb_proposal');
	$this->db->join('tbl_sidang', 'tbl_sidang.id_proposal = tb_proposal.id_proposal', 'left');
	$query = $this->db->get(); 
	return $query->result();
 }

public function insert_sidang($data)
 {
  return $this->db->insert('tbl_sidang', $data);
 }
 
}