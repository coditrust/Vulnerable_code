<?php

if(isset($_GET['file']))
{
  $str = $_GET['file'];
  $pattern = "/^(\.\/uploads_[a-zA-Z0-9]+\.php.*)/";
  $res = preg_match($pattern, $str, $matches);

  if($res != false)
  {
    include($matches[1]);
  }
}

?>
