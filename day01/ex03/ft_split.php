#!/usr/bin/php
<?php
function ft_split($my_str)
{
	$str = explode(" ", $my_str);
	$arr = array_filter($str, "strlen");
	sort($arr);
	return ($arr);
}
?>