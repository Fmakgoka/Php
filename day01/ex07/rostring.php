#!/usr/bin/php
<?php
 if ($argc > 1)
 {
	 for ($i = 0; $i < $argc; $i++)
	 {
		 $str = trim(preg_replace("/\s+/", " ", $argv[1]));
		 $split_word = explode(" ", $str);
	 }
	 for ($i = 1; $i < count($split_word); $i++)
		 echo ($split_word[$i]." ");
	 echo ($split_word[0]."\n");
 }
?>