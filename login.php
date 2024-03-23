<html>
<head>
<meta charset="utf8">
</head>
<title>dancelogin</title>
<h1><font color="#0267C1">畢業舞會報名登入</font></h1>
<form action="check.php" method="get">
帳號：<input type="text" name="account" value="" placeholder="請輸入你的帳號">
<br/>  
密碼：<input type="password" name="password" required placeholder="請輸入你的密碼">
<br/>
<input type="submit" value="登入">
</form>

<?php
//每秒更新一次
header("refresh:30");

//時區要完整(大小寫區分清楚)
date_default_timezone_set("Asia/taipei");

//秒數後面有a 畫面顯示am pm
//前面ymd大寫代表2024-Mar-Thu
//中間那些分隔號都可以改
echo date("Y-m-D h:m:s");

?>
</html>