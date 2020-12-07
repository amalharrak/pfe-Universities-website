
<?php
	require_once('session.php');
?>

<?php
	require_once('conexionbd.php');
	
	$id=$_POST['ID1'];
	$nom=$_POST['NOM1'];
	$pre=$_POST['PRENOM1'];
$email=$_POST['EMAIL1'];

	$id1=$_POST['ID2'];
	$nom1=$_POST['NOM2'];
	$pre1=$_POST['PRENOM2'];
$email1=$_POST['EMAIL2'];

		
		$requete="UPDATE binome SET NOM1=?,PRENOM1=?,EMAIL1=?,NOM2=?,PRENOM2=?,EMAIL2=? where ID1=?";
		
			
		$param=array($nom,$pre,$email,$nom1,$pre1,$email1,$id);

			
	$resultat = $pdo->prepare($requete);	
	$resultat->execute($param);	

$requete1="UPDATE admis SET NOM1=?,PRENOM1=?,EMAIL1=?,NOM2=?,PRENOM2=?,EMAIL2=? where ID1=?";
$param1=array($nom,$pre,$email,$nom1,$pre1,$email1,$id);

			
	$resultat1 = $pdo->prepare($requete1);	
	$resultat1->execute($param1);	
	


$requete2="UPDATE nonadmis SET NOM1=?,PRENOM1=?,EMAIL1=?,NOM2=?,PRENOM2=?,EMAIL2=? where ID1=?";
$param2=array($nom,$pre,$email,$nom1,$pre1,$email1,$id);

			
	$resultat2 = $pdo->prepare($requete2);	
	$resultat2->execute($param2);

$requete3="UPDATE fil1admis SET NOM=?,PRENOM=?,EMAIL=? where ID=? OR ID=?";
$param3=array($nom,$pre,$email,$id,$id1);

			
	$resultat3 = $pdo->prepare($requete3);	
	$resultat3->execute($param3);


$requete4="UPDATE file SET NOM1=?,PRENOM1=?,EMAIL1=? where ID1=? OR ID1=?";
$param4=array($nom,$pre,$email,$id,$id1);

			
	$resultat4 = $pdo->prepare($requete4);	
	$resultat4->execute($param4);



	header("location:ESPACE_ETUDIANT.php");
?>