<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>發票系統</title>
  <link rel="stylesheet" href="style.css">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&display=swap');

  body{/*字型和背景 */
    font-family: 'Noto Sans TC', sans-serif;
    background-color:#CCCCFF;
    }
  table{/*版型置中，陰影，寬度，字型 */
    margin:auto;
    box-shadow: 10px 10px 5px #888888; 
    width:800px;
    text-align:center;
    font-size:25px;
    background-color:	#99BBFF;
        }
    tr{
       height:50px;
       padding:10px;
      }
        table,td{/*逗號是table裡面全部都吃*/ 
        padding:10px;
        border-width:5px; border-color:#939699;
        border-collapse: collapse;
        font-family: 'Noto Sans TC', sans-serif;
                }
    .button{/*按鈕樣式設定 */
      width:120px;
      height:40px;
      background-color:#FFFF78;
      border-radius:10px;
      border:1px black double;
      font-size:20px;
      font-family: 'Noto Sans TC', sans-serif;
    } 
    #img{
      position:absolute;
      left:75%;
      top:25%;
      display: inline-block;
      animation-name: shadow;
      animation-duration: 5s;
      animation-iteration-count: infinite;
      animation-direction: alternate;
    }    
    @keyframes shadow {
            0%{
                filter: drop-shadow(0px 0px 10px #ff0);
            }
            33%{
                filter: drop-shadow(0px 0px 10px #0ff);
            }
            66%{
                filter: drop-shadow(0px 0px 10px #f0f);
            }
            100%{
                filter: drop-shadow(0px 0px 10px #ff0);
            }
        }
        
    h1{/*標題文字陰影,顏色,置中*/ 
    text-align: center;
    text-shadow: 2px 2px 2px #888888;
    }        
  </style>
</head>
<body>
  <h1>統一發票兌獎與紀錄</h1>
<form action="receipt_value.php" method="post"> 
<table style="border-collapse:separate; border-spacing:40px 10px;" border="1">
<tr>
    <td>
        <input type="text" value="10,11月" style="background-color:#AAAAAA;font-size:18px;">
    </td>
    <td>
        <input type="button" value="當期發票" class="button" onclick="location.href='list.php'">
    </td>
    <td>
        <input type="button" value="兌獎" class="button" onclick="location.href='query_award.php'" >
    </td>
    <td>
        <input type="button" value="輸入獎號" class="button" onclick="location.href='award_numbers.php'">
    </td>
  </tr>
  <tr>
    <td>年份：</td>
    <td><input type="text" name="year" id="year" style="background-color:#AAAAAA;font-size:18px;"></td>
  </tr>
  <tr>
    <td>期別：<select name="period" id="period" style="background-color:#AAAAAA;font-size:18px;">
                    <option value="1,2">1,2月</option>
                    <option value="3,4">3,4月</option>
                    <option value="5,6">5,6月</option>
                    <option value="7,8">7,8月</option>
                    <option value="9,10">9,10月</option>
                    <option value="11,12">11,12月</option>
      </select></td>
  </tr>
</select>
  <tr>
    <td>發票號碼：</td>
    <td><input type="text" name="code" id="code" style="background-color:#AAAAAA;font-size:18px;"></td>
    <td><input type="text" name="number" id="number" style="background-color:#AAAAAA;font-size:18px;"></td>
  </tr>
  <tr>
    <td>發票金額：</td>
    <td><input type="text" name="expend" id="expend" style="background-color:#AAAAAA;font-size:18px;"></td>
  </tr>
  <tr>
    <td colspan="2">
        <input type="submit" value="送出" class="button">
    </td>
    <td colspan="2"> 
        <input type="reset" value="清除" class="button"> 
    </td>
  </tr>
 
</table>

</form> 
<div id="img">
<img src="./images/kuma.png" >
</div>

</body>
</html>
