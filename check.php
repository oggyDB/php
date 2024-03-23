<?php
session_start();
?>
<meta charset="utf8">

<?php
$uid="nuk";
$upsw="qwertyuiop";

$account=$_POST["account"];
$password=$_POST["password"];

if ($uid==$account&&$upsw==$password) 
{
    //值是yes;變數名稱是check
    //給一張存根
    $_SESSION["check"]="yes";
    header("location:dance.php");
}else
{
    $_SESSION["check"]="no";
    header("Location:fail.php");
}

?>