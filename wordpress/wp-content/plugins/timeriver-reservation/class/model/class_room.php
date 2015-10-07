<?php
/**
 * @package Trr
 */
require_once( TRR_PLUGIN_DIR . 'class/model/trr_model_post.php' );

class Tros_Model_ClassRoom extends Tros_Model_Post {
	
	function __construct() {
		$this->target_post_type = "class_room";
	}
	
	/**
	 *   get data
	 */
	function get($ids=array()) {
		
		$metas = array(
			"man-to-man_flag"
		);
		$this->get_info_by_ids($ids, $metas);
	}
	
}
