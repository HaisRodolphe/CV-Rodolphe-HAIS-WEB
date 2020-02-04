<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Contact</title>
</head>

<body>
<?php

if(isset($_POST['Send Message'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
    print("<center>Bonjour $Name $Email $Subject $Message</center>");
}    
?>

</body>

</html>
