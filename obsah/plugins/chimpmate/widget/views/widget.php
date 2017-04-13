<?php
$plugin = ChimpMate_WPMC_Assistant::get_instance();
$wpmchimpa = $plugin->wpmchimpa;
if($plugin->isload['w']){
	$plugin->loadscripts();
	$form = $plugin->getformbyid($wpmchimpa['widget_form']);
	include_once( 'widget'.$wpmchimpa['widget_theme'].'.php' );
}?>