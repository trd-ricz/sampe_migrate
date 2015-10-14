<?php
/**
 * @package Trr
 */
class Tros_Model_Post {
	
	public $target_post_type;
	public $data = array();
	
	function get_info_by_ids($ids = array(), $metas = array()) {
	
		$args = array(
			'posts_per_page' => -1,
			'post_type'      => $this->target_post_type,
			'post_status'    => 'publish'
		);
		if ($ids) {
			$args['ID'] = implode($ids, ",");
		}
		$res = get_posts( $args );
		
		foreach ($res as $obj) {
			
			// get data from post
			$this->data[$obj->ID]['post_title'] = $obj->post_title;
			
			// get data from post_meta
			foreach ($metas as $meta_key) {
				$this->data[$obj->ID][$meta_key] = get_post_meta($obj->ID, $meta_key, true);
			}
			
		}
		
		return;
	}
	
}
