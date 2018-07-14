<?php
?>

<html>
<head>
<title>
Registration</title>
</head>
<body>
<form action="backreg.php" method="post">
user id:<input type="text" name="rid"><br>
fname:<input type="text" name="rname"><br>
gender:
<select name="rgen">
<option value="male">male</option>
<option value="female">female</option>
</select><br>
dob:<input type="text" name="rdob"><br>
mobile:<input type="text" name="rmob"><br>
PASSWORD:<input type="password" name="rpwd">
<input type="submit" name="rsubmit" value="register">

</form>

<a href="index2.php" >already registered ?</a >
</body>
</html>