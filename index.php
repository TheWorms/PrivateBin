<?php
/**
 * PrivateBin
 *
 * a zero-knowledge paste bin
 *
 * @link      https://github.com/PrivateBin/PrivateBin
 * @copyright 2012 Sébastien SAUVAGE (sebsauvage.net)
 * @license   http://www.opensource.org/licenses/zlib-license.php The zlib/libpng License
 * @version   0.22
 */
// change this, if your php files and data is outside of your webservers document root
define('PATH', '');
define('PUBLIC_PATH', dirname(__FILE__));
require PATH . 'lib/auto.php';
new privatebin;
