<?php
if(isset($_GET['username']))
{
  $username = $_GET['username'];
  echo "<a href='".htmlentities($username, ENT_COMPAT).".html'>click here</a>";
}
?>
