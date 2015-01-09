<?php

// Initialize
include 'php/init.php';

// Read menu from textfile
$menu = linesToArray('php/menu.txt');

// Define constants
define ('PAGE', $menu[0]);
define ('PATH', 'html/'. PAGE);

// Start output buffer
ob_start();

// Include HTML skeleton
require 'php/main.php';

// Get output buffer
$html = ob_get_contents();
ob_end_clean();

// Write HTML cache
$file = 'home.html';
file_put_contents($file, $html) 
or die('Permission denied: '. $file);

// Feedback on success
echo '<em>Cache updated: </em>';
echo '<a href="/">'. $file .'</a>';


/* */ ?>