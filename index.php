<?php 

// Initialize
include 'php/init.php';

// Get current page from URL
$url = $_SERVER['REDIRECT_URL'];

// If rewrite to home.html is disabled
$menu = linesToArray('php/menu.txt');
if ('' == $url) { $url = $menu[0]; }

// Define constants
define ('PAGE', trim($url,'/'));
define ('PATH', 'html/'. PAGE);

// Start output buffer
ob_start();

// Include HTML skeleton
require 'php/main.php';

// Get output buffer
$html = ob_get_contents();
ob_end_clean();

// Send HTML to browser
echo $html;

?>