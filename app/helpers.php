<?php
define('DS', '/');
define('US', '_');
define('UPLOAD_FOLDER', 'upload');
define('NO_IMAGE', 'no_image.jpg');
define('YES', 1);
define('NO', 0);
// Support language
define('EN', 'en');
define('DE', 'de');
define('AT', 'de-AT');
define('LI', 'de-LI');
define('CH', 'de-CH');
// role
define( 'ROlE_ADMIN', 'admin' );
define( 'ROlE_USER', 'user' );
define( 'ROlE_PARTNER', 'partner' );
define( 'ROlE_MODEL', 'model' );
// status
define('STATUS_INACTIVE', 0);
define('STATUS_ACTIVE', 1);
// Image
define( 'IMAGE_THUMB_NAME', 'thumb_' );
define( 'IMAGE_THUMB_WIDTH', 200 );
define( 'IMAGE_THUMB_HEIGHT', 200 );

define( 'IMAGE_MEDIUM_NAME', 'medium_' );
define( 'IMAGE_MEDIUM_WIDTH', 400 );
define( 'IMAGE_MEDIUM_HEIGHT', 400 );

define( 'IMAGE_LARGE_NAME', 'large_' );
define( 'IMAGE_LARGE_WIDTH', 800 );
define( 'IMAGE_LARGE_HEIGHT', 800 );

function getListLanguage() {
	return [
		'en' => EN,
		'de' => DE,
		'at' => AT,
		'li' => LI,
		'ch' => CH,
	];
}