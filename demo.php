<html>
<head>									
<title>Database</title>					
</head>									
<body>									
<h1>Database connection</h1>			
</body>									
</html>							
<php
$con = mysql_connect("localhost","root",""); //host name, user name, password
$connection = mysql_select_db("manideep_db",$con); //database name
?>