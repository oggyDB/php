<?php
session_start();
?>
<meta charset="utf8">

<?php
if(isset($_SESSION["check"]))
{
        //此時check變數值是yes
    if ($_SESSION["check"]=="yes") 
    {
        echo "歡迎攻入城內"."<br/>";
        //雙引號內部用單引號
        echo "<a href='logout.php'>登出</a>";
        //按下登出後check變數值是no
    }//此時check變數值是no
    else
    {
        echo "已被列入刺客名單"."<br/>";
        echo "2秒後回登入畫面";
        header("Refresh:2;url=login.php");
    }
}else
{
    echo "已被列入刺客名單"."<br/>";
    echo "2秒後回登入畫面";
    header("Refresh:2;url=login.php");
}
?>