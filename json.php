<?php

// Initialize
include 'php/init.php';

// Read menu from textfile
$menu = linesToArray('php/menu.txt');

// Start output buffer
ob_start();

echo '[';
// Generate JSON
foreach ($menu as $page) {
	$path = 'html/'. $page;
	echo '"';
	@include($path .'/body.php');
	echo '",';
}
echo '""]';

// Get output buffer
$json = ob_get_contents();
ob_end_clean();

echo $json;

/* */ ?>