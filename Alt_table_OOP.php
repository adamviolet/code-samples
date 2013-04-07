<?php

/*add to CSS
tr.row1{
	background-color:#;
}tr.row2{
	background-color:#;
}
*/

//add to controller

class AltTAble
{
	function __construct()
	{
		$this->state = 0;
		print"<table>";
	}
	function __destruct()
	{
		print"</table>";
	}
	function print_row($row)
	{
		if($this->state & 1)
		{
			$row_color = "row2";
		}
		else
		{
			$row_color = "row1";
		}
		print "<tr class =\"$row_color\">";
		foreach($row as $value)
		{
			print"<td>$value</td>";
		}
		print "<tr>";
		$this->state++;
	}
	
	
}

//add to page

$mytable = new AltTable;
while ($row = mysql_fetch_row($result)){
	//print results
	$mytable->print_row($row);
}
unset($mytable);

?>
