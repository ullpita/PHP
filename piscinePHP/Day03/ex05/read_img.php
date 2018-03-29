<?php
$file = '../img/42.png';

if (file_exists($file))
{
	$size = getimagesize($file);

	$fp = fopen($file, 'rb');

	if ($size and $fp)
	{
		header('Content-Type: '.$size['mime']);
		header('Content-Length: '.filesize($file));

		fpassthru($fp);

		exit;
	}
}
?>
