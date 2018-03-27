#!/usr/bin/php
<?php
	$elem = $argv[1];
	$elem = trim($elem);
	while ($elem != str_replace('  ', ' ', $elem))
		$elem = str_replace('  ', ' ', $elem);
	echo ("$elem\n");
?>
