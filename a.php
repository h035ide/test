#!/usr/bin/php
<?php 
  $a = "abc";
  foreach(file('/usr/share/dict/linux.words') as $line){
  $pos = strpos ( $line , $a ) ;
  if ($pos !== false) {
     echo $line;
	 }
  }
?>