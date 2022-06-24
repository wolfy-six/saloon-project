<?php

session_start();

if (isset($_SESSION["txtusername"])){
    unset($_SESSION["txtusername"]);
    session_destroy();
    echo "<script>location.href='login.php' </script>";
}else{
    echo "<script>location.href='index.html' </script>";
}



