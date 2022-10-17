<h1>計算日期間隔</h1>
設有兩個日期:
<div>2022-09-10</div>
<div>2022-10-21</div>
<?php

$a='2022-09-10';
$b='2022-10-21';
echo date("西元Y年m月d日 H:i:s");
$date1=strtotime($a."0:0:0");
$date2=strtotime($b."23:59:59")+1;
$date3=(($date2-$date1)/86400)-1;
$date4=($date2-$date1)/86400;
$date5=(($date2-$date1)/86400)-1-1;

?>
<div>包含起始日: <?=$date4?>天</div>
<div>不包含起始日: <?=$date3?>天</div>
<div>不包含結束日: <?=$date5?>天</div>

<a href="index.php">首頁</a>