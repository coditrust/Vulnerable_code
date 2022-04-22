<?php

if(isset($_GET['filename']) && isset($_GET['submit']))
{
  $filename = str_replace("/", "", $_GET['filename']);
  $filename = str_replace("|", "", $filename);
  $filename = str_replace(";", "", $filename);
  $filename = str_replace("&", "", $filename);

  $submit = $_GET['submit'];

  if($submit === "save")
  {
          $cmd = "tar -czvf ".$filename.".tar.gz ./test/";

          system($cmd);
  }
}

?>
