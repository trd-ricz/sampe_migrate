<?php
/**
 * @package Trr
 */
class Tros_Model_User {
	
	public $target_user_type;
	public $data = array();
	
	function get_info_by_ids($ids = array(), $metas = array()) {
		
		foreach ($ids as $id) {
			$res = get_userdata($id);
			//print_r($res);
			$this->data[$id]['display_name'] = $res->data->display_name;
		}
		
		return;
	}
	
}
