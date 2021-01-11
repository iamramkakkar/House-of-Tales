  <?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$myfile = fopen("newfile.html", "a");
fwrite($myfile, " ".$name." ");
fwrite($myfile, " ".$email." ");
fwrite($myfile, " ".$message." ");
fclose($myfile);
?> 
