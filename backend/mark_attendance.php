<?php
include "db.php";

$member_id = $_POST['member_id'];
$date = date("Y-m-d");

/* prevent duplicate */
$check = $conn->query("SELECT * FROM attendance 
WHERE member_id='$member_id' AND date='$date'");

if($check->num_rows == 0){
$conn->query("INSERT INTO attendance(member_id,date) 
VALUES('$member_id','$date')");
echo "marked";
}else{
echo "already";
}
?>