<?php
	/**
	* Profile Counter - enables tracking
	* 
	* @package profile_counter
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
	
	$page_owner = page_owner_entity();
	$current_count = $page_owner->getAnnotations("profilecount");
	if(!$current_count){
		$page_owner->annotate('profilecount', 1, 2);
	} else {
		$updateable = true;
		if(isloggedin()){
			if(get_loggedin_user()->getGUID() == $page_owner->getGUID()){
				// dont count own profile visits
				$updateable = false;
			}
		}
		
		if($updateable){
			update_annotation($current_count[0]->id,  "profilecount", ($current_count[0]->value + 1), $current_count[0]->value_type,$current_count[0]->owner_guid, $current_count[0]->access_id); 
	
		}
		
	}
?>