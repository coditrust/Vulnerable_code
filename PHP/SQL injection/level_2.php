<?php

if(isset($_GET['username']))
{
    $username = $_GET['username'];
    $stmt = $conn->prepare("UPDATE `users` FROM table_users SET user='$username'");
    $stmt->execute();

}

?>
