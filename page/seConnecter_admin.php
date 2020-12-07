<!--< ?php
require_once('session.php');
?>-->
<?php
	require_once('conexionbd.php');
	session_start();	
	$LOGIN=$_POST['LOGIN'];
	$PWD=$_POST['PWD'];
	
	
	$requete="select * from utilisateur where LOGIN=? and PWD=MD5(?)";
		
	$param=array($LOGIN,$PWD);	
	$resultat = $pdo->prepare($requete);		
	$resultat->execute($param);	
		
	  

	if($user=$resultat->fetch()){
		
			if($user['ETAT']==1){
           
				$_SESSION['utilisateur']=$user;
				header("Location:acceuil.php");
            
			}else{
			
				$_SESSION['erreurLogin']="<strong>Erreur!</strong> Votre compte est désactivé.<br> veuillez     crée un!!!";
				header("Location:admin_form.php");
                 
			}
    }else{
		 $_SESSION['erreurLogin']='<strong>Erreur!</strong> Login ou mot de passe incorrect!!!';
         header("Location:admin_form.php");
    } 
	
?>

