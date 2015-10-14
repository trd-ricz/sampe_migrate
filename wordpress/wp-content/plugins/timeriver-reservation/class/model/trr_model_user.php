<?php
/**
 * @package Trr
 */
class Tros_Model_User {
	
	public $target_user_type;
	public $data = array();
	
	function get_info_by_ids($ids = array(), $meta_query = array()) {
		
		$args = array(
			'blog_id'      => $GLOBALS['blog_id'],
			'role'         => $this->target_user_type,
			'meta_query'   => array()
		);
		
		if ($ids) {
			$args['include'] = $ids;
		}
		
		if ($meta_query) {
			$args['meta_query'] = $meta_query;
		}
		
		$blogusers = get_users($args);
		foreach ($blogusers as $key => $obj) {
			$this->data[$obj->data->ID]['display_name'] = $obj->data->display_name;
		}

		return;
	}
	
}
