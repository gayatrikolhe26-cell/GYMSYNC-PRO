<?php
include "db.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$plan=$_POST['plan'];
$trainer=$_POST['trainer'];

$join=date("Y-m-d");

/* BMI */
$bmi = $weight / (($height/100)*($height/100));
$bmi = round($bmi,1);

if($bmi<18.5){$bmi_status="Underweight";}
elseif($bmi<25){$bmi_status="Normal";}
elseif($bmi<30){$bmi_status="Overweight";}
else{$bmi_status="Obese";}

/* PLAN */
if($plan=="1"){
$months=1;
$amount=2000;
}
elseif($plan=="3"){
$months=3;
$amount=5000;
}
elseif($plan=="6"){
$months=6;
$amount=9000;
}

/* expiry */
$expiry=date("Y-m-d",strtotime("+$months months"));

/* insert member */
$conn->query("INSERT INTO members 
(name,phone,email,age,gender,height,weight,bmi,bmi_status,join_date,membership_plan,duration_months,expiry_date,trainer_id,status)
VALUES
('$name','$phone','$email','$age','$gender','$height','$weight','$bmi','$bmi_status','$join','$plan','$months','$expiry','$trainer','Active')
");

echo "success";
?>