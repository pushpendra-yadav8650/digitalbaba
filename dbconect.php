<?php

//<-------------------databaseconnection------------------------->
$servername="localhost";
$username= "root";
$password= "";
//<-------------------databaseconnection------------------------->
//<-------------------datagetfrom the form------------------------->
$dbname= "Digitalbaba";
$cname =$_POST['cname'];
$cphone =$_POST['cphone'];
$cemail =$_POST['cemail'];
$cfeedback =$_POST['cfeedback'];
//<-------------------datagetfrom the form------------------------->
$conn = new mysqli($servername, $username, $password,$dbname);
//$sql= "CREATE DATABASE Digitalbaba";
//$sql="CREATE TABLE  customer(id int (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, cname VARCHAR(30) NOT NULL , cphone VARCHAR(30) NOT NULL,  cemail VARCHAR(30) NOT NULL , cfeedback VARCHAR(40) NOT NULL) ";
$sql = "INSERT INTO `customer`(id ,cname ,cphone, cemail, cfeedback) values ('$id','$cname','$cphone','$cemail','$cfeedback')";
if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
 } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $id = $row["id"];
//     $cname =$row["cname"];
//     $cphone =$row["cphone"];
//     $cemail =$row["cemail"];
//     $cfeedback =$row["cfeedback"];
// } else {
// }
//$conn->query($sql); 


    


?>