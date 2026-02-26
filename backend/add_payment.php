<?php
include "db.php";

$member_id = $_POST['member_id'];
$amount    = $_POST['amount'];
$type      = "Membership";
$status    = "Paid";

$payment_date = date("Y-m-d");

/* Calculate next due date = +1 month */
$due_date = date("Y-m-d", strtotime("+1 month"));

$sql = "INSERT INTO payments 
(member_id, type, amount, payment_date, status, due_date)
VALUES 
('$member_id', '$type', '$amount', '$payment_date', '$status', '$due_date')";

if($conn->query($sql)){
    echo "success";
}else{
    echo "fail";
}
?>