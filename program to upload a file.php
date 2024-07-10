20. Write a PHP program to upload a file.
File.html
<html>
<body>
<form action="File.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload"><br><br>
    <input type="submit" name="submit" value="UPLOAD"><br><br>
</form>
</body>
</html>

File.php
<?php  
$name = $_FILES['fileToUpload']['name'];  
$tmp_name = $_FILES['fileToUpload']['tmp_name'];   
  
if(move_uploaded_file($tmp_name, $name)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
?>
