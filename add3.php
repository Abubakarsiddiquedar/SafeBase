<?php


$con=new mysqli("localhost","root","","project2");
session_start();
if(isset($_POST['create']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="INSERt INTO users(fname,lname,email,username,password) VALUES('$fname','$lname','$email','$username','$password')";

if(mysqli_query($con,$sql)){
    $_SESSION['User']=$username;
    header("location:home.php");
}
else {
    echo "something got wrong";
}
}


?>