<?php


include 'dbconnact.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT OPPERATION</title>
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
        body {
      font-family: Arial, sans-serif;
    }

    .container {
      width: 300px;
      padding: 16px;
      background-color: #f2f2f2;
      margin: 0 auto;
      margin-top: 100px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    h2 {
      text-align: center;
    }

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    </style>
</head>

<body>
    <div class="header">
        <h1 class="center">INSERT OPPERATION</h1>

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
    <form action="INSERT.PHP" method="get">
        <div class="container">
            <h2>Login Form</h2>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
        
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        
            <button type="submit" value="login"> Login</button>
          </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
  // Retrieve the form inputs
  if(isset($_GET["username"])){
    
  $name = $_GET["username"];
  $password = $_GET["password"];
  
  // Print the input values
  //echo "userName: " . $name . "<br>";
  //echo "password: " . $password;
}
        }

?>
    </div>
    <div class="footer">
        copyright@abhishekparjapati2010
    </div>
</body>

</html>



