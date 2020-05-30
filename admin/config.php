<?php
include '../global_vars.php';

$base = $PROJ_LOCAL_DIR.$PROJ_NAME;

// HTTP
define('HTTP_SERVER', 'http://localhost/'.$PROJ_NAME.'/admin/');
define('HTTP_CATALOG', 'http://localhost/'.$PROJ_NAME.'/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/'.$PROJ_NAME.'/admin/');
define('HTTPS_CATALOG', 'http://localhost/'.$PROJ_NAME.'/');

// DIR
define('DIR_APPLICATION', $base.'/admin/');
define('DIR_SYSTEM', $base.'/system/');
define('DIR_IMAGE', $base.'/image/');
define('DIR_LANGUAGE', $base.'/admin/language/');
define('DIR_TEMPLATE', $base.'/admin/view/template/');
define('DIR_CONFIG', $base.'/system/config/');
define('DIR_CACHE', $base.'/system/storage/cache/');
define('DIR_DOWNLOAD', $base.'/system/storage/download/');
define('DIR_LOGS', $base.'/system/storage/logs/');
define('DIR_MODIFICATION', $base.'/system/storage/modification/');
define('DIR_UPLOAD', $base.'/system/storage/upload/');
define('DIR_CATALOG', $base.'/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
