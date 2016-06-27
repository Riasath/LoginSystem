<html>
	<head>
		<title>Members Area</title>
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
		

			<table width="400" border="2" bgcolor="#cccccc" align="center"><td align="center" >
			<div align="center">Members Area</div><br/>
			<div align="left">
                
                <a href="calculators.php">Calculators</a>
                </div><br/>
                
            <div align="left">
                
                <a href="userlist.php">Userlist</a>
                </div><br/>
			            
			
			</td></table>


	
	</body>
</html>