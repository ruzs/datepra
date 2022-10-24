<h1>利用迴圈來計算連續五個周一的日期</h1>
<p>今天是<?=date("Y-m-d l");?></p>
<p>接下來的連續五個周一為:</p>
<hr>
<?php
$w=date("w");
echo $w;
echo "<hr>";


for ($i=0; $i <5 ; $i++) { 
  $sec=strtotime("+".($i+1)."week");
  echo date("Y-m-d l",$sec)."<br>";
}
?>
<br>
<a href="index.php">首頁</a>