<?php
/**
 * @package Trr
 */
require_once( TRR_PLUGIN_DIR . 'class/model/trr_model_post.php' );

class Tros_Model_ClassSchedule extends Tros_Model_Post {
	
	function __construct() {
		$this->target_post_type = "class_schedule";
	}
	
	/**
	 *   get data
	 */
	function get($ids) {
		
		$metas = array(
			"stt",
			"end"
		);
		$this->get_info_by_ids($ids, $metas);
	}
	
}
