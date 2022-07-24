<?php

class Billing_model extends MY_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getListDetails($limit, $start,$postVal= [])
	{
		$row = array();
		$fields = "b.*";
		$this->db->select($fields);
		$this->db->from(TBL_BLOG.' b');
		if(!empty($postVal)){
			if(isset($postVal['filter']) && !empty($postVal['filter'])){
				$this->db->where('b.type',$postVal['filter']);
			}
		}
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$row = $query->result_array();
		}
		return $row;
	}

	public function get_count() {
		return $this->db->count_all(TBL_BLOG);
	}

	public function get_authors($limit, $start) {
		$this->db->limit($limit, $start);
		$query = $this->db->get(TBL_BLOG);
		return $query->result();
	}
	function saveBlog($postVal)
	{
		$data = [
			'title'=>$postVal['title'],
			'content'=>$postVal['content'],
			'filename'=>isset($postVal['file'])?$postVal['file']:NULL,
			'type'=>isset($postVal['type'])?$postVal['type']:NULL,
			'created_at'=>date('Y-m-d H:i:s'),
		];
		if ((isset($postVal['title']) && $postVal['title'])) {
			$this->db->insert(TBL_BLOG,$data);
			return array('status' => STATUS_SUCCESS, 'msg' => 'Added successfully!', 'data' => array());
		} else {
			return array('status' => STATUS_FAIL, 'msg' => 'Something went wrong', 'data' => array());
		}
	}

	function getDetails($id){
		$row = array();
		$fields = "b.*";
		$this->db->select($fields);
		$this->db->from(TBL_BLOG.' b');
		$where = array("b.id" => $id);
		$this->db->where($where);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$row = $query->row_array();
		}
		return $row;
	}
}
?>
