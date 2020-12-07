       
<?php
	require_once('session.php');
?>
<?php
	
	require_once('conexionbd.php');
	
	$mc=isset($_GET['motCle'])? $_GET['motCle']:"";
	
	

		
	$size=isset($_GET['size'])?$_GET['size']:6;

	$page=isset($_GET['page'])? $page=$_GET['page']:1;
	
	$offset=($page-1)*$size;
	$requetef="select * from binome";
	
	if($mc==0){
		
		$resultat = "SELECT ID1,NOM1,PRENOM1,EMAIL1,ID2,NOM2,PRENOM2,EMAIL2
								FROM binome 
                                WHERE 
								
                             NOM1 like '%$mc%'OR
                                ID1='$mc' OR PRENOM1 like '%$mc%' OR NOM2 like '%$mc%'OR
                                ID2='$mc' OR PRENOM2 like '%$mc%'
								ORDER BY ID1
								LIMIT $size
							
                            OFFSET $offset";
        
       	$resultat2 = "select count(*)  nbrEtudiant 
								from binome 
								where NOM1 like '%$mc%' OR ID1='%$mc%' OR PRENOM1 like '%$mc%' OR NOM2 like '%$mc%' OR ID2='%$mc%' OR PRENOM2 like '%$mc%'";
    
    }
    
      else{
		  
		$resultat = "SELECT ID1,NOM1,PRENOM1,EMAIL1,ID2,NOM2,PRENOM2,EMAIL2
								FROM binome 
                                WHERE 
								
                                NOM1 like '%$mc%'OR
                                ID1='$mc' OR PRENOM1 like '%$mc%' OR NOM2 like '%$mc%'OR
                                ID2='$mc' OR PRENOM2 like '%$mc%'
								ORDER BY ID1
								LIMIT $size
							
                            OFFSET $offset";
        
       	$resultat2 = "select count(*)  nbrEtudiant 
								from binome 
								where NOM1 like '%$mc%' OR ID1='%$mc%' OR PRENOM1 like '%$mc%' OR NOM2 like '%$mc%' OR ID2='%$mc%' OR PRENOM2 like '%$mc%'";
    
    }
    
	
										
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





    $res="SELECT * FROM semestre ";
        $cou= $pdo->query($res);
  
     

    
function  test($cou){ 
    $tab=array() ;
    $i=0;
 
    while($st=$cou->fetch()){
        $moy1=(($st['MOYENNE_S1']+$st['MOYENNE_S2'])/2);
        if($moy1>=10){
           $moy2=(($st['MOYENNE_S3']+$st['MOYENNE_S4'])/2); 
            $sum=$st['S3']+$st['S4'];
        if($moy2>=10 || ($sum>=10)){
            if( ($st['S5']>=3 && $st['MOYENNE_S5'] >=9) ) {
                            $tab[$i]=$st['ID'];
                            $i++;
                    }
        } 
    }
}          
return $tab;
}
      
         
    
$ta=test($cou);




								
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
					
							<div class="panel-heading">Filtrer des binomes</div>
					      <div class="panel-body">
						  <form method="post" action="filtrage_test.php" class="form-inline">
						  <div class="form-group">						
								
													
    <p>
<!-- une balise select ou input ne peut pas être imbriquée directement dans form -->
     <select name="menu">
        <!-- <option value="groupadmis.php"><a href="groupadmis.php">group-admis(* les deux etudiants sont admis)</a></option>
		 <option value="problem_binom.php"><a href="problem_binom.php">problem-binome(* l'un des etudiants n'est pas admis )</a> </option>
		<option value="problem_sem.php"><a href="problem_sem.php"> problem-semestre(* les deux etudiants ne sont pas admis)</a></option>-->
          <!-- <option value="ESPACE_ETUDIANT.php"><a href="ESPACE_ETUDIANT.php">group-binome(* tous les binomes)</a></option>-->
          <option value="groupadmis.php"><a href="groupadmis.php">group-admis(* les deux etudiants sont admis)</a></option>
		 <option value="problem_binom.php"><a href="problem_binom.php">group-non-admis(* l'un des etudiants n'est pas admis * les deux etudiants ne sont pas admis)</a> </option>
		<?php  echo "hh";?> 
		 
		 
		 <!--<option > <a href="fil1.php">problem-binome</a></option>
		 <option > <a href="fil2.php">problem-semestre</a></option>-->
         
     </select>

    <!-- <input type="submit" value="Go" name="Go" title="valider pour aller à la page sélectionnée" />-->
	<button type="submit" class="btn btn-success"value="Go" name="Go" title="valider pour aller à la page sélectionnée">Go</button>
   </p>
				
                            </div>
                       
						</form>
					  </div>
					
				</div>
					 
        
        
        
        
        
			<?php include('Menu.php');?>
			
				
		
					<div class="panel panel-success margetop">
					<div class="panel-heading">Rechercher des binomes</div>
					<div class="panel-body">
						<form method="get" action="ESPACE_ETUDIANT.php" class="form-inline">
						<div class="form-group">						
								
								<input type="text" name="motCle" 
										placeholder="Taper un mot clé"
										 class="form-control" 
										value="<?php echo $mc; ?>"/>
                            </div>
                            
							<!--	<input type="hidden" name="size"  value="< ?php //echo $size ?>">		
								<input type="hidden" name="page"  value="< ?php //echo $page ?>">-->
								<button type="submit" class="btn btn-success">
									<span class="glyphicon glyphicon-search"></span>
									Chercher...
								</button>
								
										<!--<a  href="add_binome.php"><span class="glyphicon glyphicon-plus" ></span>Nouveau Binome</a>-->
		
						</form>
					</div>
				</div>
				
				
                
                
			
				<div class="panel panel-primary">
					<div class="panel-heading">
					
				Liste De Tous Les Binomes (<?php echo $nbrEtu ?> Binome(s)) 
					
					</div>
                    
					<div class="panel-body">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>CODE 1</th>
									<th>NOM 1</th>
									<th>PRENOM 1 </th>
									<th>EMAIL 1</th>
                                    <th>CODE 2</th>
									<th>NOM 2</th>
									<th>PRENOM 2 </th>
									<th>EMAIL 2</th>
                                   
								<th>ACTIONS</th>
									
								</tr>
							</thead>
							<tbody>
      	<?php while($STAGIAIRE=$resultats->fetch()){?>
								<!-- group Admis-->
                         
                        			<tr>
								<td><?php echo $STAGIAIRE['ID1'] ?></td>
								<td><?php echo $STAGIAIRE['NOM1'] ?></td>
								<td><?php echo $STAGIAIRE['PRENOM1'] ?></td>
								<td><?php echo $STAGIAIRE['EMAIL1'] ?></td>	
                            	<td><?php echo $STAGIAIRE['ID2'] ?></td>
								<td><?php echo $STAGIAIRE['NOM2'] ?></td>
								<td><?php echo $STAGIAIRE['PRENOM2'] ?></td>
								<td><?php echo $STAGIAIRE['EMAIL2'] ?></td>
                              
                                        
	<td>
        <a href="editer_binome.php?ID1=<?php echo $STAGIAIRE['ID1']?> & ID2=<?php echo $STAGIAIRE['ID2'] ?>">
<span class="glyphicon glyphicon-edit"></span>
				</a>
												
					&nbsp 
												<!--  Action Supprimer un stagiaire -->
<a onclick="return confirm('Etes vous sur de vouloir supprimer binome ?')" 
													href="supprimer_binome.php?ID1=
                                                          <?php echo $STAGIAIRE['ID1'] ?>">
													<span class="glyphicon glyphicon-trash"></span>
												</a>
																							
											 
										</td>
									</tr>
                       <?php } ?>
		
		              
                                
                                
							</tbody>
						
						</table>
																												
						<!--		<ul class="pagination">
									
									< ?php for($i=1;$i<=$nbrPage;$i++){ ?>
										<li class="< ?php if($i==$page) echo 'active' ?>">
<a href="ESPACE_ETUDIANT.php"?page=< ?php echo $i ;?>
											&motCle=< ?php echo $mc ?>
                                               
											
											&size=< ?php echo $size ?>">
												Page < ?php echo $i ;?>
											</a>
										</li>
									< ?php } ?>	
								</ul>
							-->
		<div>																						
								<ul class="pagination">
									
									<?php for($i=1;$i<=$nbrPage;$i++){ ?>
										<li class="<?php if($i==$page) echo 'active' ?>">
<a href="ESPACE_ETUDIANT.php?page=<?php echo $i ;?>&motCle=<?php echo $mc ; ?>">
   <?php echo $i ;?>
											</a>
										</li>
									<?php } ?>	
								</ul>
							
						</div>
		
				
						</div>
						
					</div>	
                                                                      
				
               <!--  <div class="panel panel-success margetop">
					<div class="panel-heading">ENVOYER EMAILS</div>
					<div class="panel-body">
										<form method="get" action="email.php" class="form-inline">

						
								<button type="submit" class="btn btn-success">
									<a  href="email.php"><span class="glyphicon glyphicon-plus" ></span>ENVOYER  EMAILS</a>
								</button>
								
                       
                                            
                                          
							
                        </form>
						
					</div>
                </div>
				 -->
                                                                                                                    
			</div>
		
        
        
        
        
        
		
	</body>
</html>
            
                                                            
                                             