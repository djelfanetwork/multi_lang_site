<?php 

/*
* PHP 5.6
* @category   N/A 
* @auther     Saied lakhdar loai <saied.lakhdar01@gmail.com>
* @copyright  DjelfaNetwork 2017
* @license    http://www.opensource.org/licenses/mit-license.html  MIT License
* @github     https://github.com/djelfanetwork
*/


// directory seperator 
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR) ; 

// Application path 
 defined('APP') ? null : define('APP', realpath(dirname(__FILE__).DS.'..')) ;

// Classes path 
defined('CLASSES') ? null : define('CLASSES', realpath(dirname(__FILE__).DS.'..'.DS.'Classes')) ;


// database informations 

// datebase host 
defined('DB_HOST') ? null : define('DB_HOST', '127.0.0.1') ;
// datebase name 
defined('DB_NAME') ? null : define('DB_NAME', 'lr') ;
// database username
defined('DB_USER') ? null : define('DB_USER', 'root') ;
// database passwork
defined('DB_PASS') ? null : define('DB_PASS', '') ;
// database driver for PDO Driver
defined('DB_DRIVER') ? null : define('DB_DRIVER', 'mysql') ;

// default timezone 
date_default_timezone_set("Europe/London");

print_r(CLASSES) ;
echo(CLASSES) ;


 ?>