13. Write a PHP script to implement form handling using post method. 
HTML File
<html>
<body>
<form action="PostDemo.php" method="post">
Username:<input type="text" name="uname"><br>
Password	:<input type="password" name="pwd"><br>
<input type="submit" value="Login">
</form>
</body>
</html>
PHP File
<?php
if ($_POST['uname']=="Frank" && $_POST['pwd']== "Welcome")
   echo "Login Successful";
else 
   echo "Login Unsuccessful. Username or Password is Incorect";
?>
