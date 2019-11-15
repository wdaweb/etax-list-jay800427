<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>發票資訊</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&display=swap');
    body{/*背景顏色,置中,文字樣式*/ 
    font-family: 'Noto Sans TC', sans-serif;
    background-color:#CCCCFF;
        }
    table{/*版面置中,版面寬度,陰影,文字大小,背景顏色*/ 
            margin:auto;
            box-shadow: 10px 10px 5px #888888; 
            width:1000px;
            background-color:#99BBFF;
            text-align:center;
            font-size:25px;
            }
     h1{/*標題文字陰影,顏色,置中*/ 
        text-align:center;
        text-shadow: 2px 2px 2px #888888;
        }
    </style>
</head>
<body>
<h1>發票資訊</h1>
<table border="1">
<tr>
<td>
<?php
 echo $period="期別:".$_POST['period']."月";
 ?>
<?php
 echo "<br>";
 $number=$_POST['number'];
 ?>
 </td>
</tr>
 <tr>
 <td>
 <?php
 echo $code="發票號碼:".$_POST['code']."-".$number;
 ?>
 </td>
 <?php
 echo "<br>";
 ?>
 </tr>
 <tr>
 <td>
 <?php
 echo $expend="總花費:".$_POST['expend']."元";
 echo "<br>";
?>
</td>
</tr>
<tr><td><a href="index.php">繼續輸入</a></td></tr>
 </table>


<?php
//新增資料到我的發票資料庫
include "base.php";
$sql="insert into receipt (`year`,`period`,`code`,`number`,`expend`) values('2019','$period','$code','$number','$expend')";

$pdo->exec($sql)

?>
</body>
</html>




