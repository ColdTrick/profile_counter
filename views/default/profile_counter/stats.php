<?php
	/**
	* Profile Counter - Displays counter
	* 
	* @package profile_counter
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
	$current_count = get_loggedin_user()->getAnnotations("profilecount");
	
	if(!$current_count){
		$current_count = 0;
	} else {
		$current_count = $current_count[0]->value;
	}
	
	$button = elgg_view("input/submit", array("internalname"=>"submitButton", "value"=>elgg_echo("profile_counter:stats:reset"), "js" => "OnClick='return confirm(\"" . elgg_echo("profile_counter:stats:confirm") . "\");'"));
	$form = elgg_view("input/form", array("internalname" => "resetForm", "method" => "post", "action" => $vars['url'] . "action/profile_counter/reset", "body" => $button));
?>
<div class="contentWrapper user_settings">
    <h3><?php echo elgg_echo('profile_counter:stats:title'); ?></h3>
    <table><tr><td style='vertical-align:middle;' width=100%>
	<?php echo sprintf(elgg_echo('profile_counter:stats:currentcount'),$current_count); ?>
	</td><td style='vertical-align:middle;'>
	<?php echo $form; ?>
	</td></tr></table>
</div>