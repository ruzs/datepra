<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日期函示</title>
</head>
<body>
  <h1>基礎函示</h1>
  <h2>date()</h2>
  <?php
  date_default_timezone_set("Asia/Taipei");
  echo date("西元Y年m月d日 H:i:s");
  ?>
  <h2>strtotime()</h2>
  <?php
  $now=strtotime("now");
  $now=$now+(60*60*24)*2;
  echo $now."<br><br>";
  echo date("西元Y年m月d日 H:i:s",$now);
  echo "<hr>";
  $tomorrow=strtotime("-1 years");
  echo date("Y-m-d H:i:s", $tomorrow);
  ?>
  <h2>練習</h2>
  <ul>
    <li><a href="pra01.php">練習一:計算日期間隔</a></li>
    <li><a href="#">練習二:</a></li>
    <li><a href="#">練習三:</a></li>
    <li><a href="#">練習四:</a></li>
  </ul>
</body>
</html>