<?php
include_once "base.php";

$year=$_POST['year'];
 $month=$_POST['month'];
 $special_award=$_POST['special_award'];
 $first_award=$_POST['first_award'];
 $second_award=$_POST['second_award'];
 $sec_2=$_POST['sec_2'];
 $sec_3=$_POST['sec_3'];
 $six_award=$_POST['six_award'];
 $six_2=$_POST['six_2'];
 $six_3=$_POST['six_3'];
 
 
 $sql="INSERT INTO `award`(`id`, `year`, `month`, `special_award`, `first_award`, `second_award`,`sec_2`,`sec_3`, `six_award`,`six_2`,`six_3`) 
 VALUES ('','2019','$month','$special_award','$first_award','$second_award','$sec_2','$sec_3','$six_award','$six_2','$six_3')";
echo $sql;
$pdo->query( $sql);
header("location:award_numbers.php");
?>