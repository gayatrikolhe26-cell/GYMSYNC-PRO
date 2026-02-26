<?php
include "db.php";

$data=[];

/* total members */
$res1=$conn->query("SELECT COUNT(*) as total FROM members");
$data['members']=$res1->fetch_assoc()['total'];

/* active members */
$res2=$conn->query("SELECT COUNT(*) as total FROM members WHERE status='active'");
$data['active']=$res2->fetch_assoc()['total'];

/* trainers */
$res3=$conn->query("SELECT COUNT(*) as total FROM trainers");
$data['trainers']=$res3->fetch_assoc()['total'];

/* revenue */
$res4=$conn->query("SELECT SUM(amount) as total FROM payments");
$row4=$res4->fetch_assoc();
$data['revenue']=$row4['total'] ? $row4['total'] : 0;

echo json_encode($data);
?>