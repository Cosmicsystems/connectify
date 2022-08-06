<?php
require('connection.php');
   unset($_COOKIE['email']);
   setcookie('email','',time()-60*60*24*30, "/");
   if(!isset($_COOKIE['email'])){
    ?>
    <script>
        window.location.href="login.html";
    </script>
    <?php
   }
?>