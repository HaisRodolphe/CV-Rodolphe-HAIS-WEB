<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Contact</title>
</head>


<body>
  <h1>Contact</h1>
  <form method="post">
    <label>Nom</label>
    <input type="text" name="nom" required>
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Message</label>
    <textarea name="message" required></textarea>
    <input type="submit">
  </form>
  <?php
  if (isset($_POST['message'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['email'] . "\r\n";

    $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

<<<<<<< HEAD
  if(isset($_POST['Send Message'])){ // si formulaire soumis
    echo $_POST['Name'];
    echo $_POST['Email'];
    echo $_POST['Subject'];
    echo $_POST['Message'];
  }

<
=======
    $retour = mail('rodolphe.hais@gmail.com', 'Envoi depuis page Contact', $message, $entete);
    if ($retour) {
      echo '<p>Votre message a bien été envoyé.</p>';
    }
  }
  ?>
</body>

</html>
>>>>>>> 5085bab10293a30e848b07451c1f970f1625f680
