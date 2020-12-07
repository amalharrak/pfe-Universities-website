
<?php
	//require_once('session.php');
	
	

        require_once('conexionbd.php');
 
    $IDE=isset($_GET['ID'])?$_GET['ID']:0;

  $sql="delete 	from enseignant where  ID=? ";
    
    $parm=array($IDE) ;
    $result=$pdo->prepare($sql);
    $result->execute($parm);
    
    header('location:ESPACE_ENSEIGNANT.php');
    



?>