
<?php include "base.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>各期奬號</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&display=swap');

        body{/*字型和線性漸層背景 */
            background: linear-gradient(#FFBB00,#BBFF00);
            font-family: 'Noto Sans TC', sans-serif;
            }
        table{/*版型置中,j版型寬度,版型文字大小 */
            margin:auto;
            box-shadow: 10px 10px 5px #888888; 
            width:1000px;
            background-color:#ADADFF;
            text-align:center;
            font-size:25px;
            }
        h1{/*標題置中,標題顏色,標題陰影 */
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
        .button{/*按鈕樣式設定*/ 
            width:120px;
            height:40px;
            border:2px black double;
            background-color:#FFBB00;
            border-radius:10px;
            font-family: 'Noto Sans TC', sans-serif;
            font-size:20px;
                }
    </style>
</head>
<body>
<table class="wrapper" border="1">
  <tr>
     <td>
        <li><a href="query_award.php?year=2019&&month=<?=($month=1);?>">1,2月</a></li>
     </td>
     <td>
        <li><a href="query_award.php?year=2019&&month=<?=($month=2);?>">3,4月</a></li>
    </td>
    <td>
        <li><a href="query_award.php?year=2019&&month=<?=($month=3);?>">5,6月</a></li>
    </td>
    <td>
        <li><a href="query_award.php?year=2019&&month=<?=($month=4);?>">7,8月</a></li>
    </td>
    <td>
        <li><a href="query_award.php?year=2019&&month=<?=($month=5);?>">9,10月</a></li>
    </td>
    <td>
        <li><a href="query_award.php?year=2019&&month=<?=($month=6);?>">11,12月</a></li>
    </td>
     <td>
        <li><a href="index.php">回首頁</a></li>
    </td>
 </tr>
 <?php
 
 if(!empty($_GET['month'])){//當month有值時，才取抓取下面的期號
    $month=$_GET['month'];
    $sql="select * from award where month='$month'";
    $rows=$pdo->query($sql)->fetch();

 ?>

</table>
    <h1>統一發票中獎號碼單</h1>
    <form action="win_award.php" method="post"> 
        
            <table border="1">
                <tr>
                    <td colspan="3">年度：<?=$rows['year'];?></td>
                </tr>
                <tr>
                    <td>月份</td>
                    <td>第<?=$rows['month'];?>期</td>
                    <td>獎金</td>
                </tr>
                <tr>
                    <td>特別獎</td>
                    <td>
                        <li><?=$rows['special_award'];?></li>
                    </td>
                    <td>1000萬元</td>
                </tr>
                <tr>
                    <td>特獎</td>
                    <td>
                        <li><?=$rows['first_award'];?></li>
                    </td>
                    <td>200萬元</td>
                </tr>
                <tr>
                    <td>頭獎</td>
                    <td>
                        <li><?=$rows['second_award'];?></li>
                        <li><?=$rows['sec_2'];?></li>
                        <li><?=$rows['sec_3'];?></li>
                    </td>
                    <td>20萬元</td>
                </tr>
                <tr>
                    <td>二獎</td>
                    <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
                    <td>4萬元</td>
                </tr>
                <tr>
                    <td>三獎</td>
                    <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
                    <td>1萬元</td>
                </tr>
                <tr>
                    <td>四獎</td>
                    <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
                    <td>4千元</td>
                </tr>
                <tr>
                    <td>五獎</td>
                    <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
                    <td>1千元</td>
                </tr>
                <tr>
                    <td>六獎</td>
                    <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
                    <td>2百元</td>
                </tr>
                <tr>
                    <td>增開六獎</td>
                    <td>
                        <li><?=$rows['six_award'];?></li>
                        <li><?=$rows['six_2'];?></li>
                        <li><?=$rows['six_3'];?></li>
                    </td>
                    <td>2百元</td>
                </tr>
                <tr>
                    <td colspan="3">
                    <input type="hidden" name="id" value="<?=$month;?>">
                    <input type="submit" value="對獎" class="button">
                    </td>
                </tr>
            <?php
 }
            ?>
            </table>
         </form>   
    
</body>
</html>