<h1>計算自己的生日還有幾天</h1>
<?php
$b='2023-09-13';
$now=strtotime("now");
$birth=strtotime($b."23:59:59");
$diff=$birth-$now;
$days=abs(floor($diff/86400));
$hr=abs(floor($diff%86400/3600));
$min=abs(floor($diff%3600/60));
$sec=abs($diff%60);
?>

<div>距離我的生日 2023/09/13還有<?=$days?>天 <?=$hr?>:<?=$min?>:<?=$sec?></div>