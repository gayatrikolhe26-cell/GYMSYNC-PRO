<?php
include "db.php";

$id=$_GET['id'];

$res=$conn->query("SELECT * FROM payments 
WHERE member_id='$id' 
ORDER BY payment_date DESC LIMIT 1");

if($res->num_rows>0){

$row=$res->fetch_assoc();
$today = strtotime(date("Y-m-d"));
$due = strtotime($row['due_date']);
$diff = ($due - $today)/86400; // days

if($diff > 5){
echo "<span style='color:#22c55e'>Active ($diff days left)</span>";
}
elseif($diff >= 0){
echo "<span style='color:orange'>Expiring in $diff days</span>";
}
else{
$over = abs($diff);
echo "<span style='color:red'>Due ($over days overdue)</span>";
}

}else{
echo "<span style='color:red'>Unpaid</span>";
}
?>