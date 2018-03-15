<?php
     if(!isset($_POST['name']) || !isset($_POST['passwort']) || !isset($_POST['passwort1'])) {
	die("Please fill all the fields with the required information.</br><a href=\"index.html\">Back</a>");
     }

	 $name = $_POST['name'];
         $passwort = $_POST['passwort'];
	 $passwortWiederholung = $_POST['passwort1'];

	 if(strlen($name) <= 5 && strlen($name) > 20 || strlen($passwort) <= 7 && strlen($passwort) > 25 || strlen($passwortWiederholung) <= 7 && strlen($passwortWiederholung) > 25) {
	die("Your name or password is too long or too short.</br>\"Name\" needs at least 6, \"Password at least 8 characters.</br>\"Name\" maximum length is 20, \"Password maximum length is 25 characters.\"<a href=\"index.html\">Back</a>");
     }

	 if($passwort != $passwortWiederholung) {
	die("Your passwords didn't match.\"<a href=\"index.html\">Back</a>");
     }

     if(!preg_match('/^[a-z]{6,25}$/', $name)) {
	die("\"Name\" has a forbidden character in it.</br><a href=\"index.html\">Back</a>");
	 }

	 if(!preg_match('/^(?=.*\d.*\d)[0-9A-Za-z!#$*]{8,}$/', $passwort)) {
	die("\"Password\" is not compliant with the password policy.</br>Have at lease two digits, and eight characters.</br><a href=\"index.html\">Back</a>");
	 }
	
	

     passthru("sh /etc/scripts/adduser_vsftpd.sh $name $passwort");
     echo ("<a href=\"index.html\">Back</a>");
?>
