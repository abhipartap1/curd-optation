<?php

include 'dbconnact.php';
error_reporting(0);

$id = $_GET['ID'];
$query ="DELETE FROM `USER` WHERE ID = '$id'";
 $data =mysqli_query ($conn,$query);
 header("location:SELECT.php");
    exit();
?>
<META HTTP-EQUIV="Refresh" CONTENT="1; URL= http://localhost/web/CURD/SELECT.php">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE OPPERATION</title>
    <style>
        body {
            margin: 0;
        }

        .header {
            width: 100%;
            background: red;

        }

        .center {
            text-align: center;
            background: red;
            color: white;
            margin: 0;
        }

        .menu {
            text-align: center;
            width: 20%;
            background-color: black;
            height: 603px;
            padding-top: 40px;
            float: left;

        }

        ul {
            list-style-type: none;
        }

        ul li {
            text-align: left;
            color: white;
            padding: 29px;
        }

        .footer {
            width: 1536px;
            height: 26px;
            background: gray;
            color: white;
            clear: both;
            text-align: center;
        }

        .welcome {
            width: 80%;
            float: right;
            background: palegreen;
            color: red;
            height: 643px;
            text-align: center;

        }
    </style>
</head>

<body>
    <div class="header">
        <h1 class="center">DELETE OPPERATION</h1>

    </div>
    <div class="menu">
        <ul>
        
            <li><a href="SELECT.php">SELECT</a></li>
            <li><a href="INSERT.php">INSERT</a></li>
            <li><a href="UPDATE.php">UPDATE</a></li>
            <li><a href="DELETE.php">DELETE</a></li>
            
            

        </ul>
    </div>
    <div class="welcome">
        welcome
    </div>
    <div class="footer">
        copyright@abhishekparjapati2010
    </div>
</body>

</html>