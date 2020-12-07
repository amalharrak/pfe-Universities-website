<?php
	require_once('session.php');
?>

	

<?php
	
	require_once('conexionbd.php');
	$mc=isset($_GET['motCle'])? $_GET['motCle']:"";
	//if(isset($_GET['ID_FILIERE']))
	//	$idf=$_GET['ID_FILIERE'];
	//else
	//$idf=0;
		
	$size=isset($_GET['size'])?$_GET['size']:5;

	$page=isset($_GET['page'])? $page=$_GET['page']:1;
	
	$offset=($page-1)*$size;
	$requetef="select * from enseignant";
	
	if($mc==0){// TOUTES LES FILIERES
		$resultat = "SELECT ID,NOM,PRENOM,EMAIL,Nbr_binome,ETAT
								FROM enseignant
                                WHERE 
								
                                NOM like '%$mc%'OR
                                ID='$mc'OR PRENOM like '%$mc%'
								ORDER BY ID
								LIMIT $size
							
                            OFFSET $offset";
        
       	$resultat2 = "select count(*)  nbrEtudiant 
								from enseignant 
								where NOM like '%$mc%' OR ID='%$mc%' OR PRENOM like '%$mc%'";
    
    }
    
      else{// TOUTES LES FILIERES
		$resultat = "SELECT ID,NOM,PRENOM,EMAIL,Nbr_binome,ETAT
								FROM enseignant 
                                WHERE 
								
                                NOM like '%$mc%'OR
                                ID='$mc' OR PRENOM like '%$mc%'
								ORDER BY ID
								LIMIT $size
							
                            OFFSET $offset";
        
       	$resultat2 = "select count(*)  nbrEtudiant 
								from enseignant
								where NOM like '%$mc%' OR ID='%$mc%' OR PRENOM like '%$mc%'";
    
    }
    
	
	echo $resultat2;
										
//

//	$resultatf = $pdo->query($requetef);

 $resultats=$pdo->query($resultat);

	
 $resultatcount=$pdo->query($resultat2);

	$nbrCount=$resultatcount->fetch();
//	
	

   $nbrEtu=$nbrCount['nbrEtudiant'];
	$reste=$nbrEtu % $size; 
	 if($reste==0)
	$nbrPage=$nbrEtu/$size;
	else
	$nbrPage=floor($nbrEtu/$size)+1;
								
?>









<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Gestion des Etudiants</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>
		 
			<?php include('Menu.php');?>
			
			<div class="container">
				<div class="panel panel-success margetop">
					<div class="panel-heading">Rechercher des Enseignants</div>
					<div class="panel-body">
						<form method="get" action="ESPACE_ENSEIGNANT.php" class="form-inline">
						<div class="form-group">						
								
								
								<input type="text" name="motCle" 
										placeholder="Taper un mot clé"
										 class="form-control" 
										value="<?php echo $mc; ?>"/>
                            </div>
                            
							<!--	<input type="hidden" name="size"  value="<?php //echo $size ?>">		
								<input type="hidden" name="page"  value="<?php //echo $page ?>">-->
								<button type="submit" class="btn btn-success">
									<span class="glyphicon glyphicon-search"></span>
									Chercher...
								</button>
								
									<a  href="add_enseignant.php"><span class="glyphicon glyphicon-plus" ></span>Nouveau Enseignant</a>
									
							
						</form>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
					
				Liste des Enseignants (<?php echo $nbrEtu ?> Enseignant) 
					
					</div>
                    
					<div class="panel-body">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>CODE</th>
									<th>NOM</th>
									<th>PRENOM</th>
									<th>EMAIL</th>
                                      <th>Nbr_binome</th>
                                    <th>ETAT</th>
                                
								<th>ACTIONS</th>
									
								</tr>
							</thead>
							<tbody>
      	<?php while($STAGIAIRE=$resultats->fetch()){?>
									<tr>
								<td><?php echo $STAGIAIRE['ID'] ?></td>
								<td><?php echo $STAGIAIRE['NOM'] ?></td>
								<td><?php echo $STAGIAIRE['PRENOM'] ?></td>
								<td><?php echo $STAGIAIRE['EMAIL'] ?></td>	
                        <td><?php echo $STAGIAIRE['Nbr_binome'] ?> </td>                    
                                        
                                        <td>
        
<form>
       <?php if($STAGIAIRE['ETAT']==0){?>
   
    
    
     <label class="radio-inline">
          <input type="radio" name="choix" id="activer" value="activer" disabled="disabled">Activé

           </label>
      <label class="radio-inline">
       <input type="radio" name="choix" id="desactiver" value="desactiver" disabled="disabled" checked="checked" >  Désactivé
    </label>
    
   
                       <?php } ?> 
  
               
                                          
 
    <?php if($STAGIAIRE['ETAT']==1){?>
         
     
    
     <label class="radio-inline">
          <input type="radio" name="choix" id="activer" value="activer" disabled="disabled"  checked="checked">Activé

           </label>
    <label class="radio-inline">
       <input type="radio" name="choix" id="desactiver" value="desactiver" disabled="disabled" >  Désactivé
    </label>
    
    
               <?php } ?>
  </form>  
                    
        </td>                              
                                        
           
	<td>
		
		
			<a href="editer_ens.php?ID=<?php echo $STAGIAIRE['ID'] ?>">
<span class="glyphicon glyphicon-edit"></span>
				</a>
												
					&nbsp 
												<!--  Action Supprimer un stagiaire -->
<a onclick="return confirm('Etes vous sur de vouloir supprimer enseignant?')" 
													href="supprimer_enseignant.php?ID=<?php echo $STAGIAIRE['ID'] ?>">
													<span class="glyphicon glyphicon-trash"></span>
												</a>
																					
											
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<div>																						
								<ul class="pagination">
									
									<?php for($i=1;$i<=$nbrPage;$i++){ ?>
										<li class="<?php if($i==$page) echo 'active' ?>">
<a href="ESPACE_ENSEIGNANT.php?page=<?php echo $i ;?>&motCle=<?php echo $mc ; ?>">
   <?php echo $i ;?>
											</a>
										</li>
									<?php } ?>	
								</ul>
							
						</div>
                        



						
					</div>
                    
                 
				</div>
                  <!--    <div class="panel panel-success margetop">
					<div class="panel-heading">ACTUALISER ETAT</div>
					<div class="panel-body">
										<form method="get" action="ESPACE_ENSEIGNANT.php" class="form-inline">

						
							<center>	
                                <button type="submit" class="btn btn-success">
									<span class="glyphicon glyphicon-edit"></span>
									<a href="ESPACE_ENSEIGNANT.php">ACTUALISER ETAT</a>
								</button> </center>
								
                       
                                            
                                          
							
                        </form>
						
					</div>
                </div>-->
				
			</div>
		
	</body>
</html>











                                                                      

  <!--&size=< ?php echo $size ?>">
												Page < ?php echo $i ;?>