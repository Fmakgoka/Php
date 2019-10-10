#!/usr/bin/php
<?php
 $str = $argv[1];
 $str = trim($str);
 $str = preg_replace('/\s+/',' ', $str);
 echo "$str\n";
?>