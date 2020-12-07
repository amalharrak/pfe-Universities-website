
<?php
	require_once('session.php');
?>
<?php
	require_once('conexionbd.php');
	
	$id=$_POST['ID'];
	$nom=$_POST['NOM'];
	$pre=$_POST['PRENOM'];
$email=$_POST['EMAIL'];
 $etat =$_POST['ETAT'];
  $nbr =$_POST['Nbr_binome'];
		
		$requete="UPDATE enseignant SET NOM=?,PRENOM=?,EMAIL=?,ETAT=?,Nbr_binome=? where ID=?";
		
			
		$param=array($nom,$pre,$email,$etat,$nbr,$id);

			
	$resultat = $pdo->prepare($requete);	
	$resultat->execute($param);	
	
	header("location:ESPACE_ENSEIGNANT.php");
?>