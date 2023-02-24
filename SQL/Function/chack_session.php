<?php 
    if(!isset($_SESSION['username'])){
        header('location: ./Dashboard@web/PHP/Login/Clone/Login.php?ref='.$_SERVER["PHP_SELF"]);
    }
?>