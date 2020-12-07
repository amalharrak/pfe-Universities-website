<?php
	require_once('conexionbd.php');
//session_start();
	
	$ID1=$_POST['ID1'];
	$NOM1=$_POST['NOM1'];
	$PRENOM1=$_POST['PRENOM1'];
    $EMAIL1=$_POST['Email1'];



$sql= "INSERT INTO etudiants (ID,NOM,PRENOM,EMAIL,ID_s1,ID_s2,ID_s3,ID_s4,ID_s5,ID_s6) VALUES($ID1,$NOM1,$PRENOM1,$EMAIL1,$ID1,$ID1,$ID1,$ID1,$ID1,$ID1)";
     // or die("Faild to quert database".mysql_error());
		

	$result=$pdo->exec($sql);
?>