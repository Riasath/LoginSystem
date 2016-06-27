<html>
	<head>
		<title>Calculator</title>
	</head>
	<body>
		<br>
		<br>
		<br>
		
            <div align="center">Welcome To Calculator</div><br/>
			<table width="400" border="2" bgcolor="#cccccc" align="center"><td align="center" >
                <?php
                if($_GET["Function"] == '+')
                {
                    echo "Your Summation is:";
                    echo $_GET["Second"] + $_GET["First"]; 
                }
                else if($_GET["Function"] == '-')
                {
                    echo "Your Summation is:";
                    echo $_GET["Second"] - $_GET["First"]; 
                }
                else if($_GET["Function"] == '*')
                {
                    echo "Your Summation is:";
                    echo $_GET["Second"] * $_GET["First"]; 
                }
                 else if($_GET["Function"] == '/')
                {
                    echo "Your Summation is:";
                    echo $_GET["Second"] / $_GET["First"]; 
                }
                else
                {
                    echo "This Calculator Can not Support This Oparator";
                }
			
			?>
			</td></table>


		

	</body>
</html>