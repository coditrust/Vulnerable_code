<?php

if(isset($_GET['file']))
{
  $file = $_GET['file'];
  
  include("/var/www/html/".$file);
}
?>
