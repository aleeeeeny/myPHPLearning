<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
    $sql="insert into `data` (name,email,gender,mobile,password)values('$name', '$email', '$gender', '$mobile', '$password')";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Connected successfully";
    }else{
        die("Connection failed: " . mysqli_connect_error());
    }
    }
   


}
// 
?>