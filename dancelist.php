<html>
<title>check information</title>
<center><font color="#D65108"><h2>報名資訊確認</h2></font></center>
<hr color="#591F0A">
<?php
$name=$_POST["name"];
echo "姓名：".$name."<br>";

$gender=$_POST["gender"];
echo "性別：".$gender."<br>";

$date=$_POST["date"];
echo "生日：".$date."<br>";

$number=$_POST["number"];
echo "同行人數：".$number."<br>";

$phone=$_POST["phone"];
echo "聯絡電話：".$phone."<br>";

$email=$_POST["email"];
echo "聯絡信箱：".$email."<br>";

$rangeInput=$_POST["rangeInput"];
echo "興奮程度指數：".$rangeInput."<br>";

$mbti=$_POST["mbti"];
echo "MBTI人格：".$mbti."<br>";

$food=$_POST["food"];
echo "飲食備註：",$checkfood=implode(",",$food),"<br/>";

$comment=$_POST["comment"];
if($comment=" ")
{
    echo "其他特殊飲食習慣：無<br>";
}
else
echo "其他特殊飲食習慣：".$comment."<br>";
echo "30秒後回登入畫面";
header("Refresh:30;url=login.php");
?>
</html>