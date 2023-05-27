
<?php
include 'dbconnact.php';
 error_reporting(0);
 
 $id =$_GET[ID];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURE OPPERATION</title>
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
        <h1 class="center">UPDATE OPPERATION</h1>

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
    <?php $id = $_GET['ID'];
   $query = "SELECT * FROM user WHERE ID='$id'";


  // FETCHING DATA FROM DATABASE
      $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    //<?php echo $_GET["username"]; 
    
    {
        $row = $result->fetch_assoc() ;
            $ID = $row["ID"]; 
            $username = $row["username"];
        
        // OUTPUT DATA OF EACH ROW
    }  
   
    
     
?>
    

        <div class="container">
            <h2>UPDATE FORM</h2>
            <label for="username"><b>Username</b></label>
            <input type="text" value ="<?php echo $username; ?>" placeholder="Enter Username" name="username" required>
        
            <label for="password"><b>Password</b></label>
            <input type="text" value ="<?php echo $row["password"]; ?>" placeholder="Enter Password" name="password" required>
        
            <button type="submit" value="login">EDIT</button>
          </div>

        </form>

        



    </div>
    <div class="footer">
        copyright@abhishekparjapati2010
    </div>
</body>

</html>