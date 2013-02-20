<?php
/**
 * Created by djuki.
 * Date: 2/19/13
 * Time: 11:38 AM
 *
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');

define ('DS', DIRECTORY_SEPARATOR);
define ('PUBLIC_PATH', dirname(__FILE__).DS);
define ('ROOT_PATH', dirname(__FILE__).DS.'..'.DS);
define ('CORE_PATH', PUBLIC_PATH.'../Core/');
define ('APP_PATH', PUBLIC_PATH.'../App/');
define ('DOC_PATH', PUBLIC_PATH.'../doc/');
define ('VENDOR_PATH', PUBLIC_PATH.'../vendor/');

require (VENDOR_PATH.'autoload.php');
Bootstrap::startApplication();