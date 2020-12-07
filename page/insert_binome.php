
<?php
	require_once('session.php');
	?>

	<?php
   
 $pdo= new PDO("mysql:host=localhost;dbname=pfe","root","amalharrak");
   
       $nom= $_POST['NOM1'];
  
   $prenom= $_POST['PRENOM1'];
   
  
    $code= $_POST['ID1'];
  
                 
             
 $email1=  $_POST['EMAIL1'];
                 
               
       $nom1= $_POST['NOM2'];
  
 $prenom1= $_POST['PRENOM2'];
     
   
 
   $code1= $_POST['ID2'];
  
    
    $email2= $_POST['EMAIL2'];
 
    
  $req1 = $pdo->exec("INSERT INTO `admis` ( `ID1`, `NOM1`,`PRENOM1`, `EMAIL1`, `ID2`, `NOM2`,`PRENOM2`, `EMAIL2`) VALUES ( '".$code."','".$nom."','".$prenom."','".$email1."','".$code1."','".$nom1."','".$prenom1."','".$email2."')");
           
    
    header('location:groupadmis.php');
    



?>

