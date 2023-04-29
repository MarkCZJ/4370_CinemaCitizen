<?php

if(!defined('WPJAM_BASIC_PLUGIN_FILE')){
	if(!is_admin()){
		wp_die('该主题基于 This theme based on WPJAM Basic 插件开发，请先Plz<a href="https://wordpress.org/plugins/wpjam-basic/">下载Download</a>并and<a href="'.admin_url('plugins.php').'">激活activate</a> WPJAM Basic 插件Plug');
		exit;
	}
}else{
	
	include_once TEMPLATEPATH.'/public/theme_functions.php';

	if(is_admin()){
		include(TEMPLATEPATH.'/admin/admin.php');
	}
}

function wpjam_theme_get_setting($setting_name){
    return wpjam_get_setting('wpjam_theme', $setting_name);
}
