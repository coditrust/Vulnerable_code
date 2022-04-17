<?php

$mysqli = new mysqli('localhost', 'admin', 'Password!', 'myapp');

if ($mysqli -> connect_errno) {  
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;  
  exit();  
}

$rep = str_replace('-', '', $_POST['name']);

// Perform query  
if ($result = $mysqli -> query("SELECT * FROM Persons WHERE name=".$rep)) {  
  echo "Returned rows are: " . $result -> num_rows;  
  // Free result set  
  $result -> free_result();  
}  

$mysqli -> close();

?>
