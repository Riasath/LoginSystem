<html>
	<head>
		<title>Login</title>
        <?php
        session_start();
        
        ?>
	</head>
	<body>
		<br>
		<br>
		<br>
		<form  name="login" method="post" action="isadmin.php">

			<table width="400" border="2" bgcolor="#cccccc" align="center"><td align="center" >
			<div align="center">SIGN IN</div><br/>
			<div align="left"> User ID :    <input type="text" name="name"/>    </div><br/>
			<div align="left"> Password :    <input type="text" name="password"/>   </div><br/>
			<div align="center">            <input type="submit" name="signin" value="SUBMIT"/>   </div><br/>
            
            <div align="left">                 
              <?php
                if(!empty($_SESSION["error"]))
                    {
                        echo $_SESSION["error"];
                        session_unset();
                        session_destroy();
                    }
                ?>   
            </div><br/>
			<div align="right"><p><a href="registration.php">Registration For User</a></p></div>
			</td></table>


		</form>

	</body>
</html>
