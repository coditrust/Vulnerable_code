<?php
if(isset($_GET['date']))
{
  $timestamp = $_GET['date'];
  $cmd = "date -d @".$timestamp; // timestamp to date
  system($cmd);
}
?>
