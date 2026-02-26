<?php
include "db.php";

$member_id=$_POST['member_id'];
$trainer_id=$_POST['trainer_id'];

$conn->query("UPDATE members SET trainer_id='$trainer_id' WHERE id='$member_id'");

echo "done";
?>