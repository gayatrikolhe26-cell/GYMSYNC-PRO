<?php
include "db.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$spec=$_POST['spec'];
$exp=$_POST['exp'];
$salary=$_POST['salary'];
$com=$_POST['com'];

$email = strtolower(str_replace(" ","",$name))."@trainer.com";
$password = password_hash("123456", PASSWORD_DEFAULT);

$conn->query("INSERT INTO trainers(name,phone,specialty,experience,salary,commission,email,password)
VALUES('$name','$phone','$spec','$exp','$salary','$com','$email','$password')");

echo "Trainer added. Default password: 123456";
?>