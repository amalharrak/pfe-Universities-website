
<?php
	require_once('session.php');
	?>
<?php
	//require_once('session.php');
	
	  
       require_once('conexionbd.php');
 
    $nom=isset($_POST['NOM'])?$_POST['NOM']:"";
      
    $prenom=isset($_POST['PRENOM'])?$_POST['PRENOM']:"";

   
    $code=isset($_POST['ID'])?$_POST['ID']:"";
   
    $email=  isset($_POST['EMAIL'])?$_POST['EMAIL']:"";
       $nbr=  isset($_POST['Nbr_binome'])?$_POST['Nbr_binome']:"";
   $etat= isset($_POST['ETAT'])?$_POST['ETAT']:"";
    
  $sql="INSERT INTO enseignant(ID,NOM,PRENOM,EMAIL,Nbr_binome,ETAT) VALUES (?,?,?,?,?,?)";
    
    
    
   $parm=array($code,$nom,$prenom,$email,$nbr,$etat) ;
    $result=$pdo->prepare($sql);
    $result->execute($parm);
    
  
    
    header('location:ESPACE_ENSEIGNANT.php');
    



?>