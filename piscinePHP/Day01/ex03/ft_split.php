<?php

function	ft_split($str)
{
	$separ = explode(" ", $str);
	$cleantab = array_filter($separ);
	sort($cleantab);
	return($cleantab);	
}

?>
