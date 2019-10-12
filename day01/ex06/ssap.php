#!/usr/bin/php
<?php
function ft_split($my_str)
{
	$str = explode(" ", $my_str);
	$arr = array_filter($str, "strlen");
	sort($arr);
	return ($arr);
}
if($argc > 1)
{
	$args = array();
	for ($i=1; $i < count($argv) ; $i++)
	{
		$str = trim(preg_replace("/\s+/"," ",$argv[$i]));
		$split = ft_split($str);
		for ($j=0; $j < count($split); $j++)
		{
			$arg = array_push($args, $split[$j]);
		}
	}
	sort($args);
	for ($i=0; $i < count($args); $i++)
	{
		echo ($args[$i]."\n");
	}
}
?>