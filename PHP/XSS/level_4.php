<?php
if(isset($_GET['search']))
{
  $search = $_GET['search'];
}else{
  $search = "";
}

$search = str_replace('/', '\/', $search);
$search = str_replace('\'', '', $search);
$search = str_replace('<', '\u003c', $search);
$search = str_replace('>', '\u003e', $search);

echo '<script>({"":"'.$search.'"});</script>';

?>
