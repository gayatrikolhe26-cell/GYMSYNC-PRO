<?php
include "db.php";

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$plan=$_POST['plan'];

$join=date("Y-m-d");

/* BMI */
$h=$height/100;
$bmi=round($weight/($h*$h),1);

/* PLAN */
if($plan=="1"){ $months=1; $amount=2000; }
if($plan=="3"){ $months=3; $amount=5000; }
if($plan=="6"){ $months=6; $amount=9000; }

$expiry=date("Y-m-d",strtotime("+$months months"));

/* CHECK EMAIL */
$check=$conn->query("SELECT id FROM members WHERE email='$email'");
if($check->num_rows>0){
echo "Email already exists";
exit();
}

/* INSERT MEMBER */
$conn->query("INSERT INTO members
(name,email,phone,password,age,gender,height,weight,bmi,join_date,membership_plan,expiry_date,status)
VALUES
('$name','$email','$phone','$password','$age','$gender','$height','$weight','$bmi','$join','$plan','$expiry','Active')
");

echo "Account created successfully";
?>