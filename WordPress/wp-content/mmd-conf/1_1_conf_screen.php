<?php
	defined( 'ABSPATH' ) || exit;
	define( 'MMD_ADDONS', [
		"nopcache",
		"layout",
		"youtube",
		"vimeo",
		"Image",
		"comments",
		"latex",
		"acf",
		"eof"
	]);
	if ( ! defined( 'WP_MMD_OPCACHE' ) ) :
		define( 'WP_MMD_OPCACHE', false );
	endif;