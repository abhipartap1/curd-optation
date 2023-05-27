<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="user";

$conn =mysqli_connect($server,$username, $password,$database);
if($conn){
    //echo "connect successfully";
}
else{
    die("Error". mysqli_connect_error());
}
if((isset($_GET["username"]) && isset($_GET["password"])) && (($_GET['username'] != "") && ($_GET['password'] != "")))
               
            
{
    $sql ="INSERT INTO USER (username, password) VALUES ('".$_GET['username']."','".$_GET['password']."')"; 

    if ($conn->query($sql) === TRUE){
    // echo "New record created sucessfully";
    header("location:SELECT.php");
    exit();

     }
}

//$sql ="INSERT INTO USER (username, password) VALUES ('".$_GET['username']."','".$_GET['password']."')";
//echo $sql;
//if ($conn->query($sql) === TRUE){
   // echo "New record created sucessfully";

  
  
//else{
    //echo "Error : ".$sql . "<br>" .$conn->error;


//header("location:SELECT.php");
//exit();





?> 

 



































