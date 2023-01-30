<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset= "utf-8">
      <meta http-equiv="language" content="NL">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Maikel Braas">
      <meta name="keywords" content="html,css-- mijn eigen website">
      <title>Kapsalon</title>
      <link rel="stylesheet" href="../css/back.css">
  </head>
  <body>
    <header>
      <a href="../index.php"><img src="../image/logo.jpg"></a>
      <p>
      <?php 
      $host = "localhost";
      $user = "root";
      $pass = "";
      $database =  "db_examen";
      $conn = new mysqli($host, $user, $pass, $database);
      session_start();
      if(!empty($_SESSION['username'])){
        echo 'Welkom ' . $_SESSION['username'] . ', je activiteiten worden bijgehouden.';
      }else{
        header("Location: ../login.php");
      }
       ?>
        <div class="container mt-5">
  <div class="row">
    <div class="col-sm-7">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
     </p>
     </p>
      <a href="partial/logout.php" class="btn-cus">Logout</a>
    </header>
    <section class="container">
      <div id="sidebar">
        <span>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
            <a href="webshop.php">Webshop</a>
            <a href="login.php">Inloggen</a>
        </span>
        <h2>Privacystatement</h2>
      </div>