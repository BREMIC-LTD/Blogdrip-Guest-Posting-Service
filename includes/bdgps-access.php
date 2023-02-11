<?php
$credential = esc_attr(get_option('blogdrip_token', '00000000-0000-0000-0000-000000000000'));
define("BDGPS_TOKEN", $credential);
define("BDGPS_PLUGIN_NAME", "blogdrip-guest-posting-service");
define("BDGPS_ENTRY_FILE", dirname(__FILE__) . "/../" . BDGPS_PLUGIN_NAME . ".php");
define("BDGPS_CACHE_DIR", dirname(__FILE__) . "/../cache");

function BDGPS_getVersion() {
	$entry_file = file_get_contents(BDGPS_ENTRY_FILE);
	$version = preg_replace("~.*Version:\W*([a-zA-Z0-9\._]*).*~sm", "\\1", $entry_file);
	return $version;
}

function BDGPS_getBlogUrl() {
	return (defined("WP_HOME")) ? WP_HOME : get_option("home", "");
}

function BDGPS_getPluginUrl() {
	return BDGPS_getBlogUrl() . "/wp-content/plugins/" . BDGPS_PLUGIN_NAME;
}

function BDGPS_genUniqueCode($length = 8) {
	$code = md5(uniqid(rand(), true));
	if(is_int($length)) return substr($code, 0, $length);
	else return $code;
}

?>