<?php
/**
 * @package Trr
 */
require_once( TRR_PLUGIN_DIR . 'class/model/trr_model_user.php' );

class Tros_Model_Student extends Tros_Model_User {
	
	
	function __construct() {
	
		$this->target_user_type = "student";
	
	}
	
	/**
	 *   get data
	 */
	function get($user_ids = array(), $meta_query = array()) {
		
		$this->get_info_by_ids($user_ids, $meta_query);
		
		return;
	}
	
}
