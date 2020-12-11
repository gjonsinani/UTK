<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese 
username dhe passwordi qe ka shkruar useri ne Index.php 
gjindet ne db ne MySQL */
	session_start();
	include("config.php"); //Mundeson lidhjen me databazen e krijuar
	$error = ""; //Variabel për ruajtjen e gabimeve tona.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Kerkohet mbushja e te gjitha fushave!.";
		}else
		{
			// Definimi i $username dhe $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			//Kontrollo username dhe password prej database
			$sql="SELECT uid FROM users WHERE username='$username' 
			and password='$password'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			/*Nese username dhe password ekzistojne ne databaze, atehere 
			krijonje sesion. Perndryshe shfaq nje (echo) error.*/
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $username; // Fillimi i sesionit
				header("location: home.php"); // hapet faqja pas logimit me sukses
			}else
			{
				$error = "Username ose Passwordi gabim.";
			}
		}
	}
?>