#!/usr/bin/php
<?php
$str = fopen("php://stdin", r);
while(1)
{
	echo"Enter the number: ";
	$val = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		exit();

	}
	if (is_numeric($val))
	{
		if(($val % 2) == 0)
		{
			echo "the number $val is even";
		}
		else
		{
			echo"the number $val is odd";
		}
	}
	else
	{
		echo"'$val' is not a number";
	}
	echo"\n";
}
?>