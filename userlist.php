<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css.css">
  <?php
        session_start();
        if(empty($_SESSION["IdValidation"]))
        {
             header('Location: '.'index.php');
        }
        ?>
</head>


<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cow_hunt";

 

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM usertable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    
    <table width="800" border="2" bgcolor="#cccccc" align="center"><td align="center" >
            <div align="center">User List</div><br/>
             <tr>
                <th>User Name</th>
                <th>User Email</th> 
                <th>Password </th>
                 <th>Actions </th>
            </tr>
    <?php
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
        <td>
            <?php echo $row["UserName"]   ?>
            
        </td>
        <td>
            <?php echo $row["UserEmail"]   ?>    
        </td> 
        <td>
            <?php echo $row["UserPassword"]   ?>
        </td>
            
        <td>
            <a href="delete_user.php?id= <?php echo $row["UserId"]   ?>">delete</a>
            
        </td>
      </tr>
        
    <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
        
</body>
</html>