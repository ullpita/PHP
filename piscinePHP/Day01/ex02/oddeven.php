#!/usr/bin/php
<?php
while (1)
{
	echo("Entrez un nombre : ");
	$nbr = fgets(STDIN);
	$nbr = substr($nbr, 0, -1);
	$nbr = trim($nbr);
	if (feof(STDIN))
	{
		echo "\n";
		exit (0);
	}
	if (is_numeric($nbr))
	{
		if (($nbr % 2) == 0)
			echo "Le chiffre ".$nbr." est pair\n";
		else
			echo "Le chiffre ".$nbr." est impair\n";
	}
	else
		echo "".$nbr." n'est pas un chiffre\n";
}
?>
