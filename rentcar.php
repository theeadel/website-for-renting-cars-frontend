<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$number=$_POST['number'];
$day=$_POST['day'];

$conn= mysqli_connect('localhost','root','','carsystem');

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
  }else{
  $stmt=("INSERT INTO rentcar(name,email,address,number,day)
  VALUES ('$name','$email','$address','$number','$day')");

  $res=mysqli_query($conn,$stmt);
  echo "rent success";
  }

?>