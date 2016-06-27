<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="cow_hunt"; 
$tbl_name="usertable"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = new mysqli($host, $username, $password, $db_name);

$myUserName=$_POST['txt_user_UserName']; 
$myUserEmail=$_POST['txt_user_UserPassword']; 
$myUserPassword=$_POST['txt_user_UserEmail']; 



$sql = "INSERT INTO usertable (UserName, UserEmail, UserPassword)
VALUES ('$myUserName','$myUserPassword', '$myUserEmail')";

if ($conn->query($sql) === TRUE) {
    echo "New User created successfully";
	?>
	
	 <br><a href="Login.php">Back To login</a>
	 
<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();









?>