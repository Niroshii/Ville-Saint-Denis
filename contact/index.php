<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = 'thomas.lavo@nermont.fr';
    $subject = $message;

    $message = "Nom: <br/>{$username} <br/><br/>Email: <br/>{$email} <br/><br/>Téléphone: <br/>{$phone}  <br/><br/>Message: <br/>" . $message;


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= 'From: no-reply.mairie@saintdenis.fr';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Votre demande est envoyé.');</script>";
    }else {
      echo "<script>alert('Votre demande n'a pas été envoyé.');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="./images/homepage/ampoule fav.png">
  </head>
  <body>
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Prenons contact !</h3>
          <p class="text">
            Contacter la mairie de Saint Denis dès maintenant, afin d'obtenir plus de renseignements sur notre
            magnifique ville et ses habitations disponible.
          </p>
          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="Image location Saint Denis" />
              <p>32 Roadstreet, Lemoyne, 41500, Saint Denis</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="Image email Saint Denis" />
              <p>mairie@saintdenis.fr</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="Image téléphone Saint Denis" />
              <p>+33 0000 0000</p>
            </div>
          </div>
          <div class="social-media">
            <p>Suivez nous sur les réseaux :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
          <form action="" method="post" autocomplete="off">
            <h3 class="title1">Contactons Nous</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Votre nom</label>
              <span>Votre nom</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Téléphone</label>
              <span>Téléphone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Envoyer" class="btn" />
          </form>
        </div>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>
