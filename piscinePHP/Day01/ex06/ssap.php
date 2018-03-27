#!/usr/bin/php
<?php
	foreach (array_slice($argv, 1) as $elem)
	{
		$elem = trim($elem);
		while ($elem != str_replace('  ', ' ', $elem))
			$elem = str_replace('  ', ' ', $elem);
		while ($elem != str_replace(' ', "\n", $elem))
			$elem = str_replace(' ', "\n", $elem);
		echo ("$elem\n");
		break;
	}
?>
