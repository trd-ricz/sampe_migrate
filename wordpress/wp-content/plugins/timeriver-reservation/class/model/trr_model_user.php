<?php
/**
 * @package Trr
 */
class Tros_Model_User {
	
	public $target_user_type;
	public $data = array();
	
	function get_info_by_ids($ids = array(), $metas = array()) {
		
		$args = array(
			'blog_id'      => $GLOBALS['blog_id'],
			'role'         => $this->target_user_type,
			'meta_key'     => '',
			'meta_value'   => '',
			'meta_compare' => '',
			'meta_query'   => array(),
			'date_query'   => array(),
			'include'      => array(),
			'exclude'      => array(),
			'orderby'      => 'login',
			'order'        => 'ASC',
			'offset'       => '',
			'search'       => '',
			'number'       => '',
			'count_total'  => false,
			'fields'       => 'all',
			'who'          => ''
		);
		
		if ($ids) {
			$args['include'] = $ids;
		}
		
		$blogusers = get_users($args);
		foreach ($blogusers as $key => $obj) {
			$this->data[$obj->data->ID]['display_name'] = $obj->data->display_name;
		}

		return;
	}
	
}
