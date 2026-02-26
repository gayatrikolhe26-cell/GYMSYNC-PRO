<?php
include "db.php";

$member_id = $_POST['member_id'];
$plan = $_POST['plan'];

if($plan=="1"){
$months=1;
$amount=2000;
}
if($plan=="3"){
$months=3;
$amount=5000;
}
if($plan=="6"){
$months=6;
$amount=9000;
}

/* new expiry */
$res=$conn->query("SELECT expiry_date FROM members WHERE id='$member_id'");
$row=$res->fetch_assoc();

$current_expiry = $row['expiry_date'];
$today = date("Y-m-d");

if($current_expiry < $today){
$new_expiry = date("Y-m-d", strtotime("+$months months"));
}else{
$new_expiry = date("Y-m-d", strtotime($current_expiry." +$months months"));
}

/* update member */
$conn->query("UPDATE members 
SET expiry_date='$new_expiry', status='Active'
WHERE id='$member_id'");

/* add payment record */
$conn->query("INSERT INTO payments(member_id,amount,date)
VALUES('$member_id','$amount',NOW())");

echo "renewed";
?>