<h1>利用date()函式的格式化參數，完成以下日期格式呈現</h1>
<pre>
  2021/10/05
  10月5日 Tuesday
  2021-10-5 12:9:5
  2021-10-5 12:09:05
  今天是西元2021年10月5日 上班日(或假日)
</pre>
<hr>
<?php
$date="2022/10/14 13:5:18";
echo "原始日期:".$date;
$sec=strtotime($date);

echo "<br>";
echo date("m月j日 l",$sec);
echo "<br>";
echo date("m月j日",$sec).(int)date("H",$sec).":".(int)date("i",$sec).":".(int)date("s",$sec);
echo "<br>";
echo date("m月j日 H:i:s",$sec);
echo "<br>";
echo "今天是西元".date("Y",$sec)."年".date("m",$sec)."月".(int)date("d",$sec)."日";
echo "  ";
echo ((date("N",$sec))<6)?"上班日":"假日";
// if ((date("N",$sec))<6) {
//   echo " 上班日";
// }else{
//   echo " 假日";
// }
?>
<br><br>
<a href="index.php">首頁</a>