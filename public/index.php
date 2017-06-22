<?php
define('DOCUMENT_ROOT', dirname($_SERVER['DOCUMENT_ROOT']));
define('DS', DIRECTORY_SEPARATOR);
define('VENDORDIR', DOCUMENT_ROOT . DS . 'vendor');

require VENDORDIR . DS . 'autoload.php';
new app\controller\IndexController();