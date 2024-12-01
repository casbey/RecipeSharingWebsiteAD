<?php

// Helper constants for the database
define('DB_TYPE','mysql');
define('DB_NAME','rsw_project');
define('DB_HOST','localhost');
define('DB_USER','rsw_project');
define('DB_PASS','bVu3Bv_14m9-ThJm');
define('DB_PORT', 3306);

// Basic configuration
define('CHARSET','utf-8');
define('TITLE','Recipe Sharing Website');
define('CSS',['style.css','menu_style.css']);

// Constants for file location, and other constants
define('ROOT_DIR','./');
define('PROTECTED_DIR',ROOT_DIR.'protected/');
define('PUBLIC_DIR',ROOT_DIR.'public/');
define('VIEWS_DIR',PROTECTED_DIR.'views/');
define('CSS_DIR', PUBLIC_DIR.'css/');
define('CORE_DIR', PROTECTED_DIR.'core/');
define('CONTENT_DIR', PROTECTED_DIR.'content/');

define('START_CONTENT', 'main');

define('BASE_URL', 'http://localhost/RSW_Project/');