<?php

// Define file directories
define('SKTTHEMES_FUNCTIONS', get_template_directory() . '/sktthemes_framework');
define('SKTTHEMES_ADMIN', get_template_directory() . '/sktthemes_framework/admin');
define('SKTTHEMES_CONTENT', get_template_directory() . '/sktthemes_framework/content');
define('SKTTHEMES_JS', get_template_directory_uri() . '/sktthemes_framework/js');
define('SKTTHEMES_FRAMEWORK', get_template_directory_uri() . '/sktthemes_framework');
define('SKTTHEMES_CSS', get_template_directory_uri() . '/css/');
define('SKTTHEMES_HOME', get_template_directory_uri());
define('SKTTHEMES', get_template_directory() . '/sktthemes_framework/skthemes');

// Load theme specific init file.
require_once(get_template_directory() . '/sktthemes_framework/theme_specific/_theme_specific_init.php');

// Load SKTtheme functions
require_once(SKTTHEMES . '/metabox/init.php');

// Load admin
require_once(SKTTHEMES_ADMIN . '/admin-functions.php');
require_once(SKTTHEMES_ADMIN . '/admin-interface.php');

?>