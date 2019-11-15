<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>發票列表</title>
    <style>
     @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&display=swap');

body{/*背景漸層,文字樣式設定*/ 
    background: linear-gradient(#FFBB00,#BBFF00);
    /* background-color:#FFBB00; */
    font-family: 'Noto Sans TC', sans-serif;
    }
table{/*版型寬度,版型置中,陰影,顏色,字型大小*/ 
    margin:auto;
    box-shadow: 10px 10px 5px #888888; 
    width:1000px;
    background-color:#ADADFF;
    text-align:center;
    font-size:25px;
    }
h1{/*標題文字陰影,顏色,置中*/ 
    text-align: center;
    color:blue;
    text-shadow: 2px 2px 2px #888888;
}
tr{
height:50px;
padding:10px;
 }
table,td{/*逗號是table裡面全部都吃*/ 
padding:10px;
border:5px #FFB7DD groove;/*點線框*/
border-collapse: collapse;
        }
  </style>
</head>
<body>
<table>
<tr>
    <td>
<li><a href="list.php?year=2019&&period=<?=($period=1);?>">1,2月</a></li>
    </td>
    <td>
<li><a href="list.php?year=2019&&period=<?=($period=2);?>">3,4月</a></li>
    </td>
    <td>
<li><a href="list.php?year=2019&&period=<?=($period=3);?>">5,6月</a></li>
    </td>
    <td>
<li><a href="list.php?year=2019&&period=<?=($period=4);?>">7,8月</a></li>
    </td>
    <td>
<li><a href="list.php?year=2019&&period=<?=($period=5);?>">9,10月</a></li>
    </td>
    <td>
<li><a href="list.php?year=2019&&period=<?=($period=6);?>">11,12月</a></li>
    </td>
<td>
<li>
<a href="index.php">回首頁</a>
</li>
</td>
</tr>
</table>


<?php
$coder=["UG","UV","AZ","CA","BR","FH"];//英文字母


if((!empty($_GET['year'])) && (!empty($_GET['period']))){
  $year=$_GET['year'];
  $period=$_GET['period'];
}
$sum=6;
?> 

<?PHP
//發票亂數產生
if($year=2019&&$period==1){
  for($i=0;$i<=$sum;$i++){
    $code=$coder[rand(0,5)];//英文字母亂數
    $number=rand(30000000,79999999);//號碼亂數
    $expend=rand(50,1000);//花費金額亂數
    $sql="insert into receipt (`year`,`period`,`code`,`number`,`expend`) values('2019','$period','$code','$number','$expend')";
    $pdo->exec($sql);
}
  ?>
  <h1>1月2月份發票清單</h1>
  <?php
}
?>
<?PHP
if($year=2019&&$period==2){
  for($i=0;$i<=$sum;$i++){
    $code=$coder[rand(0,5)];
    $number=rand(30000000,79999999);
    $expend=rand(50,1000);
    $sql="insert into receipt (`year`,`period`,`code`,`number`,`expend`) values('2019','$period','$code','$number','$expend')";
    $pdo->exec($sql);
}
  ?>
  <h1>3月4月份發票清單</h1>
  <?php
}
?>

<?PHP
if($year=2019&&$period==3){
  for($i=0;$i<=$sum;$i++){
    $code=$coder[rand(0,5)];
    $number=rand(30000000,79999999);
    $expend=rand(50,1000);
    $sql="insert into receipt (`year`,`period`,`code`,`number`,`expend`) values('2019','$period','$code','$number','$expend')";
    $pdo->exec($sql);
  }
  ?>
  <h1>5月6月份發票清單</h1>
  <?php
}
?>
<?PHP
if($year=2019&&$period==4){
  for($i=0;$i<=$sum;$i++){
    $code=$coder[rand(0,5)];
    $number=rand(30000000,79999999);
    $expend=rand(50,1000);
    $sql="insert into receipt (`year`,`period`,`code`,`number`,`expend`) values('2019','$period','$code','$number','$expend')";
    $pdo->exec($sql);
  }
  ?>
  <h1>7月8月份發票清單</h1>
  <?php
}
?>
<?PHP
if($year=2019&&$period==5){
  for($i=0;$i<=$sum;$i++){
    $code=$coder[rand(0,5)];
    $number=rand(30000000,79999999);
    $expend=rand(50,1000);
    $sql="insert into receipt (`year`,`period`,`code`,`number`,`expend`) values('2019','$period','$code','$number','$expend')";
    $pdo->exec($sql);
  }
  ?>
  <h1>9月10月份發票清單</h1>
  <?php
}
?>
<?PHP
if($year=2019&&$period==6){
  for($i=0;$i<=$sum;$i++){
    $code=$coder[rand(0,5)];
    $number=rand(30000000,79999999);
    $expend=rand(50,1000);
    $sql="insert into receipt (`year`,`period`,`code`,`number`,`expend`) values('2019','$period','$code','$number','$expend')";
    $pdo->exec($sql);
  }
  ?>
  <h1>11月12月份發票清單</h1>
  <?php
}
?>

<h1>發票清單</h1>

<table>
    <tr>
        <td>發票號碼</td>
        <td>發票金額</td>
        <td>操作</td>
    </tr>
    <?php
    $sql="select * from receipt where period='$period'";//資料庫語法(抓取我receipt這張表單裡的所有資料)
    $rows=$pdo->query($sql)->fetchAll();//fecthAll()是抓取全部資料，fecth()是抓取一筆資料。rows這邊變數可以任意更改
    foreach($rows as $receipt){//利用迴圈的方式來抓取$receipt表單裡的所有資料
    ?>
    <tr>
        <td><?=$receipt['code'];?>-<?=$receipt['number'];?></td>
        <td><?=$receipt['expend'];?>元</td>
        <td><a href="del_ticket.php?id=<?=$receipt['id'];?>">刪除</td><!--因為我們要刪除資料庫裡的資料(所以從列表那邊著手)-->
    </tr>
    <?php
    }
    ?>
</table>
    
</body>
</html>
