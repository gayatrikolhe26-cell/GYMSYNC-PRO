<?php
include "db.php";

$today = date("Y-m-d");

/* expire members automatically */
$conn->query("
UPDATE members 
SET status='Expired' 
WHERE expiry_date < '$today'
AND status='Active'
");
?>