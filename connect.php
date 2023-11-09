<?php
 $name=$_POST['name'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $message=$_POST['message'];


$connection = mysqli_connect("localhost","root","","contact") or die("connection failed"); 

 //database connection
//  $conn=new mysqli('localhost','root','','contact');
//  if($conn->connect_error){
//     die('connection failed : '.$conn->connect_error);
//  }
//  else{
//     $stmt = $conn->prepare("insert into registration(name,email,contact,message)
//     values(?,?,?,?)");
//     $stmt->bind_param("ssis",$name,$email,$contact,$message);
//     $stmt->execute();
//     echo "Registration Successfully....";
//     $stmt->close();
//     $conn->close();
//  }

?>