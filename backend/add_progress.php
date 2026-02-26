<?php
include "db.php";

$member_id=$_POST['member_id'];
$weight=$_POST['weight'];
$height=$_POST['height'];

$bmi = $weight / (($height/100)*($height/100));
$date=date("Y-m-d");

$conn->query("INSERT INTO progress(member_id,weight,height,bmi,date)
VALUES('$member_id','$weight','$height','$bmi','$date')");

echo "success";
?>