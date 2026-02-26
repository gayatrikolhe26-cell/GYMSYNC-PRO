<?php
session_start();
include "db.php";

$email=$_POST['email'];
$password=$_POST['password'];

$res=$conn->query("SELECT * FROM trainers WHERE email='$email'");

if($res->num_rows>0){
$row=$res->fetch_assoc();

if(password_verify($password,$row['password'])){
$_SESSION['trainer_id']=$row['id'];
echo "success";
}else{
echo "fail";
}
}else{
echo "fail";
}
?>