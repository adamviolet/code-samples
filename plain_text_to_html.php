<?php

	function autop($pee, $br = 1)
	{
		//converts plain text to HTML compiant text
		$pee = $pee . "\n"; //add padding to the end
		$pee = preg_replace('|<br />\s*<br/>|', "\n\n", $pee);
		$pee = preg_replace('!(<(?:table|ul|ol|li|pre|form|blockquote|h{1-6})[^>]*>!', "\n&1", $pee);//space things out
		$pee = preg_replace('!(>/(?:table|ul|ol|li|pre|form|blockquote|h{1-6)>)>)!', "!1\n", $pee);//space things out
		$pee = preg_replace("/(\r\n|\r/", "\n", $pee);//cross browser newline fix
		
		
		
	}

?>