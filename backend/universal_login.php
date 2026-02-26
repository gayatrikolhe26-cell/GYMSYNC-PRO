<?php
session_start();
include "db.php";

$role=$_POST['role'];
$email=$_POST['email'];
$password=$_POST['password'];

/* ADMIN */
if($role=="admin"){
$res=$conn->query("SELECT * FROM admins WHERE email='$email' AND password='$password'");
if($res->num_rows>0){
echo "admin";
}else{echo "fail";}
}

/* TRAINER */
/* TRAINER */
if($role=="trainer"){

$res=$conn->query("SELECT * FROM trainers WHERE email='$email' AND password='$password'");

if($res->num_rows>0){

$trainer=$res->fetch_assoc();   // ⭐ get trainer row

$_SESSION['email']=$email;
$_SESSION['role']="trainer";
$_SESSION['trainer_id']=$trainer['id'];   // ⭐ VERY IMPORTANT

echo "trainer";

}else{
echo "fail";
}
}

/* MEMBER */
if($role=="member"){
$res=$conn->query("SELECT * FROM members WHERE email='$email' AND password='$password'");
if($res->num_rows>0){

$_SESSION['email']=$email;
echo "member";   // ONLY ONE echo

}else{
echo "fail";
}
}
?>