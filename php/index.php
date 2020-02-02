<?php


var_dump($_POST);


if(isset($_POST['Send Message'])){ // si formulaire soumis
  echo $_POST['Name'];
  echo $_POST['Email'];
  echo $_POST['Subject'];
  echo $_POST['Message'];
}
