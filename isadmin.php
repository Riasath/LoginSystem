
<?php
session_start();
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="cow_hunt"; 
$tbl_name="usertable"; 


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$myusername=$_POST['name']; 
$mypassword=$_POST['password']; 



$sql="SELECT * FROM $tbl_name WHERE UserEmail='$myusername' and UserPassword='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


if($count==1){

echo "Hello Admin";
    $_SESSION["IdValidation"] = $myusername;
    header('Location: '.'members.php');

;

}
else {
    $_SESSION["error"] = "Wrong Username or Password";
    header('Location: '.'login.php');
}
?>