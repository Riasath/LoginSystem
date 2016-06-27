<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
    <head>
        <title>Registration</title>
    </head>
    <body>

<br>
<br>
<br>
<form  name="student_insert_form" method="post" action="reg_Confirm.php">
<table width="400" border="2" bgcolor="#cccccc" align="center"><td align="center" >
<h3>Registration For User</h3>
  <a href="home.php">Home</a>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="txt_user_UserName"></td>
            </tr>
            <tr>
                <td>User Password :</td>
              <td><input type="text" name="txt_user_UserPassword"></td>
            </tr>
                    <tr>
                <td>User Email :</td>
                <td><input type="text" name="txt_user_UserEmail"></td>
            </tr>
            
               
                <td><div align="center"><input type="submit" name="insert" value="SUBMIT"/></div</td>
				<br>
				<a href="login.php">Back To login</a>
            </tr>
			
        </table>
		 
</form>


    </body>
</html>
