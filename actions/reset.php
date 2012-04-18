<?php
	/**
	* Profile Counter - Resets the counter
	* 
	* @package profile_counter
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
	gatekeeper();
	// Make sure action is secure
	action_gatekeeper();
	
	$current_count = get_loggedin_user()->getAnnotations("profilecount");
	if($current_count){
		delete_annotation($current_count[0]->id);	
	}
	forward($_SERVER['HTTP_REFERER']);
	
?>