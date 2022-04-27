<?php

if(isset($_GET['search']))
{
   $search = $_GET['search'];
   $search = str_replace("<", "&lt;", $search);
   $search = str_replace(">", "&gt;", $search);
}else{
   $search = '""';
}

?>

<script>
function displayname(u)
{
   document.write(u);
}

 let search = <?php echo '"'.addslashes(urldecode($search)).'"'; ?>;
 displayname(search);

</script>
