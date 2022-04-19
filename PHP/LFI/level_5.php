<?php

if(isset($_GET['file']))
{
  $file = $_GET['file'];
  
  $authorized_files = array("index", "other", "something");
  
  for($i=0;$i<sizeof($authorized_files);$i++)
  {
    if(strstr($file, $authorized_files[$i]) != false)
    {
      include($file.".php");
      break;
    }
  }
}


?>
