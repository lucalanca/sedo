<?php

// Initialize
//include ('php/init.php');
//$menu = linesToArray('php/menu.txt');

// Declare variables
$query = key($_GET);
$value = reset($_GET);

// Load content
if ('content' == $query) {
	$path = 'html/'. $value;
	@include($path .'/body.php');
}

/* */ ?>