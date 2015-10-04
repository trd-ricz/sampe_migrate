<?php
/**
 * @package Trr
 */
require_once( TRR_PLUGIN_DIR . 'class/model/trr_model_user.php' );

class Tros_Model_Student extends Tros_Model_User {
	
	
	/**
	 *   get data
	 */
	function get_data($user_ids = array()) {
		
		$this->get_info_by_ids($user_ids);
		
		return;
	}
	
}
