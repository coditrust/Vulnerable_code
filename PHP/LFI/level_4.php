<?php

if(isset($_GET['file']))
{
  $file = str_replace('/', '', $_GET['file']);
  $file = str_replace('.', '', $file);
  $decoded = urldecode($file);
  include($decoded);

}

?>
