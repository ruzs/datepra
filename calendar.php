<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP月曆</title>
  <style>
    table{
      border: 3px double #00f;
    }
    td{
      border: 1px solid #aaa;
    }
    td:nth-child(6),td:nth-child(7){
      background-color:pink;
    }

  </style>
</head>
<body>
  <h1>月曆</h1>
  <?php
    $year=date("Y");
    $month=date("n");
    $today=date("d");
    $firstDate=date("Y-m");
    $firstDateWeek=date('N',strtotime($firstDate));
    $monthDays= date("t",strtotime($firstDate));
    $week=ceil($monthDays/7)+1;
    echo $today;
    echo $monthDays;
    echo "<br>";
    echo $firstDate;
    echo "<br>本月第一天是星期:";
    echo $firstDateWeek;
  ?>
  <table>
  <tr>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
    <td>日</td>
  </tr>
  <?php
  for ($i=1; $i <= 7; $i++) { 
    echo "<tr>";
    for ($j=1; $j <=7 ; $j++) { 
      if ($i==1) {
        if ($j>=$firstDateWeek) {
          echo "<td>";
          echo ($i-1)*7+$j-($firstDateWeek-1);
          echo "</td>";
        }else{
          echo "<td></td>";
        }
      }else{
        $date=($i-1)*7+$j-($firstDateWeek-1);
        if ($date==$today) {
          echo "<td style='background: lightblue;'>";
        }else{
          echo "<td>";
        }
        if ($date<=$monthDays) {
          echo $date;
        }
        echo "</td>";
        if ($date==$monthDays) {
          $i=7;
        }
      }
    }
    
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>