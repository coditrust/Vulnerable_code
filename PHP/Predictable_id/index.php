<?php

session_start();

if(isset($_POST) & !empty($_POST) && $_SESSION['code'] != ""){

        if($_POST['captcha'] == $_SESSION['code'] && $_POST['captcha'] != ""){
                echo "correct captcha";
        }else{
                echo "Invalid captcha";
        }
}

?>
<html>
<head>
    <title>Simple CAPTCHA Script in PHP</title>
</head>
  <body>
    <form action="" method="post">
        Nom : <input type="text" name="name" /><br />
        Email : <input type="text" name="email" /><br />
        Captcha : <img src="captcha.php" /><br />
        Recopier le Captcha : <input type="text" name="captcha" /><br />
        <input type="submit" value="submit" />
    </form>
  </body>
</html>
