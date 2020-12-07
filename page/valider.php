<?php


//require_once('conexionbd.php');
//$pdo= new PDO("mysql:host=localhost;dbname=pfe","root","amalharrak");
    	$pdo = new PDO('mysql:host=localhost;dbname=pfe', 'root', 'amalharrak');





	                if(isset($_POST['submit'])) // Si on clique sur S'inscrire
	{  
						
						//ETUDIANT ***1***
						
		if(isset($_POST['S11']))
{
    $nombre1=$_POST['S11'];
    $total1=count($nombre1);
     
}else{ $total1=0;}
						
if(isset($_POST['S21']))
{
    $nombre2=$_POST['S21'];
    $total2=count($nombre2);
     
}else{ $total2=0;}
						
if(isset($_POST['S31']))
{
    $nombre3=$_POST['S31'];
    $total3=count($nombre3);
     
}else{ $total3=0;}
						
if(isset($_POST['S41']))
{
    $nombre4=$_POST['S41'];
    $total4=count($nombre4);
     
}else{ $total4=0;}

if(isset($_POST['S51']))
{
    $nombre5=$_POST['S51'];
    $total5=count($nombre5);
     
}else{ $total5=0;}
						
if(isset($_POST['S61']))
{
    $nombre6=$_POST['S61'];
    $total6=count($nombre6);
     
}else{ $total6=0;}
						
						//ETUDIANT **2**
											
		if(isset($_POST['S12']))
{
    $nomb1=$_POST['S12'];
    $t1=count($nomb1);
     
}else{ $t1=0;}
						
if(isset($_POST['S22']))
{
    $nomb2=$_POST['S22'];
    $t2=count($nomb2);
     
} else{ $t2=0;}
						
if(isset($_POST['S32']))
{
    $nomb3=$_POST['S32'];
    $t3=count($nomb3);
     
}else{ $t3=0;}
						
if(isset($_POST['S42']))
{
    $nomb4=$_POST['S42'];
    $t4=count($nomb4);
     
}else{ $t4=0;}

if(isset($_POST['S52']))
{
    $nomb5=$_POST['S52'];
    $t5=count($nomb5);
     
}else{ $t5=0;}
						
						
if(isset($_POST['S62']))
{
    $nomb6=$_POST['S62'];
    $t6=count($nomb6);
     
}else{ $t6=0;}
		
		
		
		// On définis les variables nécéssaires
		//htmlspecialchars() permet de protéger les champs afin d'éviter des failles XSS
		//echo "heloo";
               
		
		$code1 = $_POST['code1']; // Pas besoin de protéger un type="number"
		$ms1= $_POST['MS1'];
		$ms2= $_POST['MS2'];
		$ms3= $_POST['MS3'];
		$ms4= $_POST['MS4'];
		$ms5= $_POST['MS5'];
		$ms6= $_POST['MS6'];
		 // Pas besoin de protéger un type="number"
		$ns1= $_POST['NS1'];
		$ns2= $_POST['NS2'];
		$ns3= $_POST['NS3'];
		$ns4= $_POST['NS4'];
		$ns5= $_POST['NS5'];
		$ns6= $_POST['NS6'];
		
		
		$code2 = $_POST['code2']; // Pas besoin de protéger un type="number"
		$mos1= $_POST['MoyS1'];
		$mos2= $_POST['MoyS2'];
		$mos3= $_POST['MoyS3'];
		$mos4= $_POST['MoyS4'];
		$mos5= $_POST['MoyS5'];
		$mos6= $_POST['MoyS6'];
		
		$nns1= $_POST['NNS1'];
		$nns2= $_POST['NNS2'];
		$nns3= $_POST['NNS3'];
		$nns4= $_POST['NNS4'];
		$nns5= $_POST['NNS5'];
		$nns6= $_POST['NNS6'];
    // if($code1 AND  $total1 AND $ms1 AND  $total2 AND $ms2 AND  $total3 AND $ms3 AND  $total4 AND  $ms4 AND  $total5 AND $ms5 AND $total6 AND $ms6) // On vérifie si elles existent
	//	{// On insère dans la BDD qui sera `inscription` et la table `user`
			$req1 = $pdo->exec("INSERT INTO `Semestre` ( `ID`,`S1`,`note_eliminatoire1`, `MOYENNE_S1`,`S2`,`note_eliminatoire2`, `MOYENNE_S2`,`S3`, `note_eliminatoire3`, `MOYENNE_S3` ,`S4`,`note_eliminatoire4`, `MOYENNE_S4`,`S5`,`note_eliminatoire5`, `MOYENNE_S5`,`S6`,`note_eliminatoire6`, `MOYENNE_S6`) 
VALUES ( '".$code1."','".$total1."', '".$ns1."','".$ms1."','".$total2."','".$ns2."','".$ms2."','".$total3."','".$ns3."','".$ms3."','".$total4."','".$ns4."',
'".$ms4."','".$total5."','".$ns5."','".$ms5."','".$total6."','".$ns6."','".$ms6."')");
           
	//	}
		//else // Tous les renseignement ne sont pas remplis
		//{
		//	echo "Veuillez renseigner tous les champs !";
		//}
        
        	//if($code2 AND $t1 AND $mos1  AND $t2 AND  $mos2 AND $t3 AND $mos3 AND $t4  AND $mos4 AND $t5 AND $mos5 AND $t6 AND $mos6) 
				// On vérifie si elles existent
		//{
			// On insère dans la BDD qui sera `inscription` et la table `user`
		$req1 = $pdo->exec("INSERT INTO `Semestre` ( `ID`,`S1`,`note_eliminatoire1`, `MOYENNE_S1`,`S2`,`note_eliminatoire2`, `MOYENNE_S2`,`S3`, `note_eliminatoire3`, `MOYENNE_S3` ,`S4`,`note_eliminatoire4`, `MOYENNE_S4`,`S5`,`note_eliminatoire5`, `MOYENNE_S5`,`S6`,`note_eliminatoire6`, `MOYENNE_S6`) 
			VALUES ( '".$code2."','".$t1."','".$nns1."','".$mos1."','".$t2."','".$nns2."','".$mos2."','".$t3."','".$nns3."','".$mos3."','".$t4."','".$nns4."','".$mos4."','".$t5."','".$nns5."','".$mos5."','".$t6."','".$nns6."','".$mos6."')");
           
		//}
        
	} 

	
?>










<div class="container col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">	
    
         
      <div class="panel panel-primary margetop">
        <div class="panel-heading"><big>VOTRE DEMANDE EN COURS DE TRAITEMENT...</big></div>
          
          <div class="panel-heading"><big><h3 align="center" style="color:red;">VEUILLEZ POSER VOTRE RELEVES DE NOTES CHEZ LA SECRETAIRE DE VOTRE DEPARTEMENT </h3> </big></div>
          
            <form id="contact-form" method="post" action="couverture.php" role="form" class="container">

	<center><button type="submit" class="btn btn-success">QUITER</button></center>
        <!--<div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Quiter" name="submit">
            </div>-->

</form>

    </div></div>








