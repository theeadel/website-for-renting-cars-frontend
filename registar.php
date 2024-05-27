<?php 
$name=$_POST['username'];
$email=$_POST['E-mail'];
$address=$_POST['password'];
$conn= mysqli_connect('localhost','root','','carsystem');

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
  }else{
  $stmt=("INSERT INTO registar(name,email,address)
  VALUES ('$name','$email','$address')");

  $res=mysqli_query($conn,$stmt);
  echo "rent success";
  }

?>