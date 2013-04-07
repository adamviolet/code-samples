<?php

	function name_cmp($a, $b)
	{
		$r = strcasecmp($a["name"], $b["name"]);
		if ($r == 0)
		{
			if ($a["price"] < $b["price"])
			{
				$r = -1;
			}
			elseif($a["price"] > $b["price"])
			{
				$r = 1;
			}
			else
			{
				$r = 0;
			}
		}
		return $r;
	
	}

?>