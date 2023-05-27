
<?php


include 'dbconnact.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT OPPERATION</title>
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
        table, th, td {
  border:1px solid black;
}
    </style>
</head>

<body>
    <div class="header">
        <h1 class="center">SELECT OPPERATION</h1>

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


        <?php
    $query = "SELECT * FROM `user`";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        
?>
            <table>
               
            <tr>
              <th>USER NAME</th>
              <th>PASSWORD</th>
              <th>UPDATE</th>
              <th>DELETE</th>
              </tr>
               <?php while($row = $result->fetch_assoc()) { 
	            $ID = $row["ID"]; ?>
            
            <tr>
              <td><?php echo $row["username"]; ?></td>
              <td><?php echo $row["password"]; ?></td>
              <td><a href="UPDATE.php?ID=<?php echo $ID; ?>">EDIT</a></td>
              <td><a href="DELETE.php?ID=<?php echo $ID; ?>"onclick ='return chackdelete()'>DELETE</a></td>
              
            </tr>
         <?php } ?>
          </table> 
       
   <?php } 
    else {
        echo "0 results";
    }
  
   $conn->close();
    
?>


    </div>
    <div class="footer">
        copyright@abhishekparjapati2010
    </div>

    
</body>

</html>