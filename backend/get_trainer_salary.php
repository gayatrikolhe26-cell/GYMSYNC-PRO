<?php
include "db.php";

$res = $conn->query("SELECT * FROM trainers");
$data = [];

while($t = $res->fetch_assoc()){

$trainer_id = $t['id'];

/* count PT clients */
$c = $conn->query("
SELECT COUNT(*) AS total 
FROM payments 
WHERE type='pt' 
AND member_id IN 
(SELECT id FROM members WHERE trainer_id='$trainer_id')
");

$count = $c->fetch_assoc()['total'];

/* salary calculation */
$total_salary = $t['salary'] + ($count * $t['commission']);

$t['clients'] = $count;
$t['total_salary'] = $total_salary;

$data[] = $t;
}

echo json_encode($data);
?>