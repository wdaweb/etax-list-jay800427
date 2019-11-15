<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>各期奬號</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&display=swap');

        body{/*背景顏色,字型,背景顏色填滿*/ 
            background: linear-gradient(#FFBB00,#BBFF00);
            /* background-color:#FFBB00; */
            font-family: 'Noto Sans TC', sans-serif;
            background-size:cover;
            }
        table{/*版面置中,版面寬度,陰影,背景顏色,文字大小*/ 
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
        .button{/*按鈕樣式設定*/ 
            width:120px;
            height:40px;
            border:2px black double;
            background-color:#FFBB00;
            border-radius:10px;"
            font-family: 'Noto Sans TC', sans-serif;
            font-size:20px;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <td>
               <li>
                <a href="query_award.php">獎號查詢</a>
               </li>
            </td>
            <td>
                <li>
                <a href="index.php">回首頁</a>
                </li>
            </td>
        </tr>
    </table>
    <h1>發一發票中獎號碼單</h1>
    <div >
        <form action="award_value.php" method="post">
            <table border="1">
                <tr>
                    <td colspan="3">
                        年度：<input type="text" name="year" id="year" style="background-color:pink;font-size:18px;">
                    </td>
                </tr>
                <tr>
                    <td>月份</td>
                    <td>
                        <select name="month" id="month" style="background-color:pink;font-size:18px;">
                            <option value="1">1,2月</option>
                            <option value="2">3,4月</option>
                            <option value="3">5,6月</option>
                            <option value="4">7,8月</option>
                            <option value="5">9,10月</option>
                            <option value="6">11,12月</option>
                        </select>
                    </td>
                    <td>獎金</td>
                </tr>
                <tr>
                    <td>特別獎</td>
                    <td>
                        <input type="text" name="special_award" id="special_award" style="background-color:pink;font-size:18px;"> 
                    </td>
                    <td>1000萬元</td>
                </tr>
                <tr>
                    <td>特獎</td>
                    <td>
                        <input type="text" name="first_award" id="first_award" style="background-color:pink;font-size:18px;">
                    </td>
                    <td>200萬元</td>
                </tr>
                <tr>
                    <td>頭獎</td>
                    <td>
                    <input type="text" name="second_award" id="second_award" style="background-color:pink;font-size:18px;">
                    <input type="text" name="sec_2" id="sec_2" style="background-color:pink;font-size:18px;">
                    <input type="text" name="sec_3" id="sec_3"style="background-color:pink;font-size:18px;">
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
                    <input type="text" name="six_award" id="six_award" style="background-color:pink;font-size:18px;">
                    <input type="text" name="six_2" id="six_2" style="background-color:pink;font-size:18px;">
                    <input type="text" name="six_3" id="six_3" style="background-color:pink;font-size:18px;">
                    </td>
                    <td>2百元</td>
                </tr>
                <tr>
                    <td colspan="3">
                    <input type="hidden" name="id" id="id" value="<?=$year?>">
                        <input type="submit" value="送出" class="button">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>