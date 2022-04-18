<?php

if(isset($_GET['file']))
{
  $file = str_replace('../', '', $_GET['file']);
  
  include($file.".php");
}
?>
