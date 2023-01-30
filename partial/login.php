<?php

require_once 'partial/header.php';
require_once 'backend/class/User.php';
$host = "localhost";
$user = "root";
$pass = "";
$database =  "db_examen";
$conn = new mysqli($host, $user, $pass, $database);
$user = new User();

if(isset($_POST['login'])){
	echo $user->login($_POST);
}
session_start();
if(isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']){
	header("Location: ./backend/admin.php");
}


?>

    <main>
    	<section class="form">
	    	<form method="post">
			    <h2>Je haar zit goed</h2>
                <h5>Inloggen</h5>
	    		<label for="username" id="username">Gebruikersnaam: </label>
	    		<input type="text" name="username" required><!-- admin -->
	    		<label for="password">Wachtwoord: </label>
	    		<input type="password" name="password" required>
	    		<input type="submit" name="login" value="Login">
	    	</form>
	    	<a href="registratie.php">Registreren</a>
    	</section>
    </main>


<?php
require_once 'partial/footer.php';
?>