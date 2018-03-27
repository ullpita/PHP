<?php
	function	ft_is_sort($tab)
	{
		$t_sort = $tab;
		sort($t_sort);
		return($tab === $t_sort);
	}
?>
