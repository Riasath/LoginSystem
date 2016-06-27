<html>
	<head>
		<title>Login</title>
        <?php
        session_start();
        if(empty($_SESSION["IdValidation"]))
        {
             header('Location: '.'index.php');
        }
        ?>
	</head>
	<body>
		<br>
		<br>
		<br>
		<form  name="login" method="get" action="calculate.php">

			<table width="400" border="2" bgcolor="#cccccc" align="center"><td align="center" >
			<div align="center">Calculator</div><br/>
			<div align="left"> Enter 1st Number :    <input type="text" name="First"/>    </div><br/>
			<div align="left"> Enter 2nd Number :    <input type="text" name="Second"/>   </div><br/>
                <div align="left"> Mathmetical Function :    <input type="text" name="Function"/>   </div><br/>
			<div align="center">            <input type="submit" name="signin" value="Calculate"/>   </div><br/>
			
			</td></table>


		</form>

	</body>
</html>