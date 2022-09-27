<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//include('settings.php'); // define $USER and $PASS for DB here

function deleteBadChars($word)
{
      $word = str_replace(' or ', '', $word);
      $word = str_replace(' OR ', '', $word);
      $word = str_replace('-', '', $word);
      $word = str_replace('\"', '', $word);
      return $word;
}

$mysqli = new mysqli('localhost', $USER, $PASS, 'myapp');

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$login = deleteBadChars($_GET['login']);
$password = deleteBadChars($_GET['password']);

$req = "SELECT * FROM Persons WHERE login='".$login."' AND password=MD5('".$password."')";
$result = $mysqli->query($req);

if ($result == false ) {
     echo("Error description: " . $mysqli->error);
     exit();
}

if($result->num_rows >= 1)
{
      echo "Good job, you are authenticated!!";
      $result -> free_result();
}else{
   echo $mysqli->error;
}

$mysqli -> close();
?>
