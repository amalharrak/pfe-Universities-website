
<?php
	//require_once('session.php');
	
	
 require_once('conexionbd.php');
 
    $IDE=isset($_GET['ID1'])?$_GET['ID1']:0;

 $sql="delete from binome where  ID1=? ";
    
    $parm=array($IDE) ;
    $result=$pdo->prepare($sql);
    $result->execute($parm);


 $sql1="delete from admis where  ID1=? ";
    
    $parm1=array($IDE) ;
    $result1=$pdo->prepare($sql1);
    $result1->execute($parm1);

 $sql2="delete from nonadmis where  ID1=? ";
    
    $parm2=array($IDE) ;
    $result2=$pdo->prepare($sql2);
    $result2->execute($parm2);
    

 $sql3="delete from fil1admis where  ID=? ";
    
    $parm3=array($IDE) ;
    $result3=$pdo->prepare($sql3);
    $result3->execute($parm3);


 $sql4="delete from file where  ID1=? ";
    
    $parm4=array($IDE) ;
    $result4=$pdo->prepare($sql4);
    $result4->execute($parm4);
    
    header('location:ESPACE_ETUDIANT.php');
    



?>