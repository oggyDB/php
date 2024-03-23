<?php
session_start();
//方法1:$_SESSION["check"]="no";
session_destroy();
header("location:login.php");
?>