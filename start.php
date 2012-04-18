<?php
	/**
	* Profile Counter
	* 
	* @package profile_counter
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
	function profile_counter_init()	{
		global $CONFIG;
		
		// Extend profile to keep track of count
		extend_view('profile/userdetails','profile_counter/count',999);
		
		// Extend statistics to show current count
		extend_view('usersettings/statistics','profile_counter/stats',999);
		
	}
	
	register_elgg_event_handler('init','system','profile_counter_init');	
	register_action("profile_counter/reset", true, $CONFIG->pluginspath . "profile_counter/actions/reset.php");
?>