<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中獎資訊</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&display=swap');
    table{
    margin:auto;
    box-shadow: 10px 10px 5px #888888; 
    width:800px;
    text-align:center;
    font-size:25px;
    border-spacing:50px;
    background-color:	#99BBFF;
        }
    body{
    font-family: 'Noto Sans TC', sans-serif;
    background-color:#CCCCFF;
    }
    h1{       
    text-align:center;
    text-shadow: 2px 2px 2px #888888;
      }
    </style>
</head>
<body>
    <h1>中獎資訊</h1><!--標題資訊-->
    <table>
    <td>
    <li><a href="query_award.php">回對獎資訊</a></li><!--回對獎-->
    </td>
    </table>
<?php
$id=$_POST['id'];
$dsn="mysql:host=localhost;charset=utf8;dbname=ticket";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `award` WHERE 1";//1-2中獎單號
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$sql1="SELECT * FROM `award2` WHERE 1";//3-4月中獎單號
$data=$pdo->query($sql1)->fetch(PDO::FETCH_ASSOC);

//   print_r($row);
// echo $row['num1'];

echo "<br>";
$sql="SELECT `number` FROM `receipt`where period='$id'";//發票清單資料庫

$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//  print_r($rows);
// echo $rows[0]['num'];
?>
<table border="1">
<tr>
<td>發票號碼</td>
</tr>
<tr>
<td>
中獎資訊:
<?php
//發票條件
foreach ($rows  as $key) {
    //  echo $row['second_award'];
    //  echo "<br>";

    // echo $key['number'];
    //  echo "<br>";
    if(($row['special_award'])==($key['number'])){
        echo $key['number'];
        echo "號碼:"."恭喜~中一千萬:";//特別獎
        echo "<br>";
    }else if(($row['first_award'])==($key['number'])){
        echo $key['number'];
        echo "號碼:"."恭喜中二百萬";  //特獎
        echo "<br>";
    }else if(($row['second_award'])==($key['number'])){
        echo $key['number']; //頭獎
        echo "號碼:"."恭喜中20萬";
        echo "<br>";
    }else if(($row['sec_2'])==($key['number'])){
        echo $key['number'];//頭獎(2)
        echo "號碼:"."恭喜中20萬";
        echo "<br>";
    }else if(($row['sec_3'])==($key['number'])){
        echo $key['number'];//頭獎(3)
        echo "號碼:"."恭喜中20萬";
        echo "<br>";
    }else if(substr($row['second_award'],1,7)==substr($key['number'],1,7) || substr($row['sec_2'],1,7)==substr($key['number'],1,7)|| substr($row['sec_3'],1,7)==substr($key['number'],1,7)){
        echo $key['number'];//判斷第一筆頭獎的二獎
        echo "號碼:"."恭喜中二獎";
        echo "<br>";
    }else if(substr($row['second_award'],2,7)==substr($key['number'],2,7) || substr($row['sec_2'],2,7)==substr($key['number'],2,7)|| substr($row['sec_3'],2,7)==substr($key['number'],2,7)){
        echo $key['number'];
        echo "號碼:"."恭喜中三獎";
        echo "<br>";
    }else if(substr($row['second_award'],3,7)==substr($key['number'],3,7)|| substr($row['sec_2'],3,7)==substr($key['number'],3,7)|| substr($row['sec_3'],3,7)==substr($key['number'],3,7)){
        echo $key['number'];
        echo "號碼:"."恭喜中四獎";
        echo "<br>";
    }else if(substr($row['second_award'],4,7)==substr($key['number'],4,7)|| substr($row['sec_2'],4,7)==substr($key['number'],4,7)|| substr($row['sec_3'],4,7)==substr($key['number'],4,7)){
        echo $key['number'];
        echo "號碼:"."恭喜中五獎";
        echo "<br>";
    }else if(substr($row['second_award'],5,7)==substr($key['number'],5,7)|| substr($row['six_2'],5,7)==substr($key['number'],5,7)|| substr($row['six_3'],5,7)==substr($key['number'],5,7)){
        echo "號碼:".$key['number']."恭喜中六獎";
        echo "<br>";
    }else if(substr($row['sec_2'],5,7)==substr($key['number'],5,7)||substr($row['sec_3'],5,7)==substr($key['number'],5,7)){
        
        echo "號碼:".$key['number']."恭喜中六獎";
        echo "<br>";
    }else{
        echo "<br>";
        echo "號碼:".$key['number'];
        echo ":抱歉~該號碼沒有中獎";
        echo "<br>";
  }
}

//第二期對獎(3-4月)
foreach ($rows  as $key) {
    //  echo $row['second_award'];
    //  echo "<br>";

    // echo $key['number'];
    //  echo "<br>";
    if(($data['special_award'])==($key['number'])){
        echo "號碼:"."恭喜~中一千萬:";//特別獎
        echo $key['number'];
        echo "<br>";
    }else if(($data['first_award'])==($key['number'])){
        echo $key['number'];
        echo "號碼:"."恭喜中二百萬";  //特獎
        echo "<br>";
    }else if(($data['second_award'])==($key['number'])){
        echo $key['number']; //頭獎
        echo "號碼:"."恭喜中20萬";
        echo "<br>";
    }else if(($data['sec_2'])==($key['number'])){
        echo $key['number'];//頭獎(2)
        echo "號碼:"."恭喜中20萬";
        echo "<br>";
    }else if(($data['sec_3'])==($key['number'])){
        echo $key['number'];//頭獎(3)
        echo "號碼:"."恭喜中20萬";
        echo "<br>";
    }else if(substr($data['second_award'],1,7)==substr($key['number'],1,7) || substr($data['sec_2'],1,7)==substr($key['number'],1,7)|| substr($data['sec_3'],1,7)==substr($key['number'],1,7)){
        echo $key['number'];//判斷第一筆頭獎的二獎
        echo "號碼:"."恭喜中二獎";
        echo "<br>";
    }else if(substr($data['second_award'],2,7)==substr($key['number'],2,7) || substr($data['sec_2'],2,7)==substr($key['number'],2,7)|| substr($data['sec_3'],2,7)==substr($key['number'],2,7)){
        echo $key['number'];
        echo "號碼:"."恭喜中三獎";
        echo "<br>";
    }else if(substr($data['second_award'],3,7)==substr($key['number'],3,7)|| substr($data['sec_2'],3,7)==substr($key['number'],3,7)|| substr($data['sec_3'],3,7)==substr($key['number'],3,7)){
        echo $key['number'];
        echo "號碼:"."恭喜中四獎";
        echo "<br>";
    }else if(substr($data['second_award'],4,7)==substr($key['number'],4,7)|| substr($data['sec_2'],4,7)==substr($key['number'],4,7)|| substr($data['sec_3'],4,7)==substr($key['number'],4,7)){
        echo $key['number'];
        echo "號碼:"."恭喜中五獎";
        echo "<br>";
    }else if(substr($data['second_award'],5,7)==substr($key['number'],5,7)|| substr($data['six_2'],5,7)==substr($key['number'],5,7)|| substr($data['six_3'],5,7)==substr($key['number'],5,7)){
        echo $key['number'];
        echo "號碼:"."恭喜中六獎";
        echo "<br>";
    }else if(substr($data['sec_2'],5,7)==substr($key['number'],5,7)||substr($data['sec_3'],5,7)==substr($key['number'],5,7)){
        echo $key['number'];
        echo "號碼:"."恭喜中六獎";
        echo "<br>";
    }else{
        echo "<br>";
        echo "號碼:".$key['number'];
        echo ":抱歉~該號碼沒有中獎";
        echo "<br>";
  }
}
?>
</tr>

</table>
</body>
</html>
