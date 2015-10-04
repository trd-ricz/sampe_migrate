<?php
/**
 * @package Trr
 */
require_once( TRR_PLUGIN_DIR . 'class/model/trr_model_post.php' );

class Tros_Model_ClassType extends Tros_Model_Post {
	
	function __construct() {
		$this->target_post_type = "class_type";
	}
	
	/**
	 *   get data
	 */
	function get_data($ids) {
		
		$metas = array();
		$this->get_info_by_ids($ids, $metas);
	}
	
}
