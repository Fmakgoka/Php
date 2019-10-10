#!/usr/bin/php
<?php
if (isset($argv) && isset($argc))
{
	$i = 1;
	while ($i < $argc)
	{
		echo "$argv[$i]\n";
		$i++;
	}
}
else
echo "\n";
?>