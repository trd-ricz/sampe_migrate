<?php
/**
 * @package Trr
 */
require_once( TRR_PLUGIN_DIR . 'class/model/trr_model_user.php' );

class Tros_Model_Teacher extends Tros_Model_User {
	
	
	function __construct() {
		
		$this->target_user_type = "teacher";
		
	}
	
	/**
	 *   get teachers
	 */
	function get($user_ids = array()) {
		
		$this->get_info_by_ids($user_ids);
		
		return;
	}
	
}
