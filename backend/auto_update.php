<?php
include "db.php";

$today = date("Y-m-d");

/* mark expired */
$conn->query("
UPDATE members 
SET status='Expired' 
WHERE expiry_date < '$today'
");

/* mark active if renewed */
$conn->query("
UPDATE members 
SET status='Active' 
WHERE expiry_date >= '$today'
");

echo "updated";
?>