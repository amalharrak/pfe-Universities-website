<?php
ob_start();
include('conexionbd.php');
//$env1 = "SELECT * FROM admin ";
//$admin1 = $pdo->query($env1);



function  test($cou){ 
    $tab=array() ;
    $i=0;
 
    while($st=$cou->fetch()){
           $moy1=(($st['MOYENNE_S1']+$st['MOYENNE_S2'])/2);
        if($moy1>=10){
           $moy2=(($st['MOYENNE_S3']+$st['MOYENNE_S4'])/2); 
            
            $sum=$st['S3']+$st['S4'];
            
            if($moy2>=10){
              if( ($st['S5']>=3 && $st['MOYENNE_S5'] >=9) || $st['MOYENNE_S5'] >=10) {
                         $tab[$i]=$st['ID'];
                            $i++;
                    }
                    
                    }
                 else{
                     if($sum>=10){
                  if($st['S5']>=3 && $st['MOYENNE_S5'] >=9  || $st['MOYENNE_S5'] >=10 ){
                            $tab[$i]=$st['ID'];
                            $i++;
                     
                  }
                    }
                }  
       
            }
            }          
         
        return $tab;
    }

 $resultat = "SELECT * FROM binome ;";
 $resultats=$pdo->query($resultat);
         
 $res="SELECT * FROM semestre ";
        $cou= $pdo->query($res);    
$ta=test($cou);


$admis=array();
    $i=0;
    while($STAGIAIRE=$resultats->fetch()){
                foreach($ta as $elem1){
                    foreach($ta as $elem2){
                        if($elem1!=$elem2){
                            if(($elem1==$STAGIAIRE['ID1']) && $elem2==$STAGIAIRE['ID2'] )
                                { 
                                $admis[$i]['ID1']=$STAGIAIRE['ID1'];
                                $admis[$i]['NOM1']=$STAGIAIRE['NOM1'];
                                $admis[$i]['PRENOM1']=$STAGIAIRE['PRENOM1'];
                                $admis[$i]['EMAIL1']=$STAGIAIRE['EMAIL1'];
                                $admis[$i]['ID2']=$STAGIAIRE['ID2'];
                                $admis[$i]['NOM2']=$STAGIAIRE['NOM2'];
                                $admis[$i]['PRENOM2']=$STAGIAIRE['PRENOM2'];
                                $admis[$i]['EMAIL2']=$STAGIAIRE['EMAIL2'];
                               
                                $i++;
                             
                                }
                                   
                            } }
    }   }      


function email($admis,$env){
include('conexionbd.php');

$tab=array();
$i=0;
    $resultens=$pdo->query($env);
    while($ens=$resultens->fetch()){
            foreach($admis as $admi){
                        
                        $email1=$admi['EMAIL1'];
                       $email2=$admi['EMAIL2'];
                 $nom1=$admi['NOM1'];
                       $nom2=$admi['NOM2'];
                 $prenom1=$admi['PRENOM1'];
                       $prenom2=$admi['PRENOM2'];
                       echo $email1;
                       echo '<br>';
                       echo $email2;
                       echo '<br>';
                    $ens2=$ens['EMAIL'];
                $nom=$ens['NOM'];
                $prenom=$ens['PRENOM'];
                       echo $ens['EMAIL'];
                       echo '<br>';
                       echo '<br>';
   $titre1 = "PFE 2019-2020";

    //$texte1 = "</b>";      
    //$texte2 = "<font >Bonjour".$prenom."";         

                
                
  $destinataire='$email1';
  $delapartde = "amalharrak@gmail.com";
  $from  = "From:".$delapartde."\n";
  $from .= "MIME-version: 1.0\n";
  $from .= "Content-type: text/html; charset= UTF-8\n";
        
                $texte1="Bonjour ".$prenom1.",<br>votre encadrant en Projet de fin d'étude PFE est <font color=\"red\"> " .$prenom."  " .$nom. "</font>
 <br> pour plus d'information veuillez le contacter sur cette adresse mail :<b> " .$ens2. "</b> ";
   
 if(mail($email1,$titre1,$texte1,$from)){echo "true <br>";}
 
 $texte2="Bonjour ".$prenom2.",<br>
 votre encadrant en Projet de fin d'étude PFE est <font color=\"red\"> " .$prenom."  " .$nom. "</font>
 <br> pour plus d'information veuillez le contacter sur cette adresse mail :<b> " .$ens2. "</b> ";
                
if(mail($email2,$titre1,$texte2,$from)){echo "true <br>";}
                else echo "false1";
$texte3="Bonjour Monsieur,<br>
        Vous etes encadrant de binome   <font color=\"red\"> " .$prenom1."  " .$nom1. " et " .$prenom2."  " .$nom2. "</font>
 <br> pour plus d'information veuillez le contacter sur cette adresse mail :<b> " .$email1.   " " .$email2. "</b> ";
                   
  if(mail($ens2,$titre1,$texte3,$from)){echo "true <br>";}
                        else echo "false2";
                  
            }
 }
    //return true ;        
    }







function nbr_binome($env,$admis){
    include 'conexionbd.php';
    $resultens=$pdo->query($env);
while($test=$resultens->fetch()){
      $nbr=$test['Nbr_binome'];
    
    echo '<br>'.$nbr.'<br>';
    //echo '<br>'.$resultens['ID'].'<br>';
if($nbr<1){
    $a=$test['ID'];
 $sql= "  UPDATE enseignant SET Nbr_binome=$nbr+1 where ID= $a";
   $sql1=$pdo->query($sql);
   $t=$sql1->fetch();
    //echo $t['ID'];
    return email($admis,$env); 
     
    }
    else   {
    if($test['ETAT']==1){
        $a=$test['ID'];
    $sql= "  UPDATE enseignant SET Nbr_binome=$nbr+1 where ID= $a";
   $sql1=$pdo->query($sql);
   $t=$sql1->fetch();
    //echo $t['ID'];
    return email($admis,$env); }
        else{
        $env="SELECT * FROM enseignant order by RAND() LIMIT 1";                        
        $resultens=$pdo->query($env);
  return  nbr_binome($env,$admis);}
    
    }
    
}
   
}
$env="SELECT * FROM enseignant order by RAND() LIMIT 1";                        
nbr_binome($env,$admis);
//email($admis);














header('Location:ESPACE_ETUDIANT.php');
ob_enf_fluch();
?>                  
                     