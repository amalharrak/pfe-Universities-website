<?php
	
	require_once('session.php');
	require_once('conexionbd.php');

	$idd=$_GET['ID1'];

	
$idd2=$_GET['ID2'];
  
	$requete="select * from binome where ID1=$idd AND ID2=$idd2";
	$resultat = $pdo->query($requete);
	$etu = $resultat->fetch();

                           
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Edition d'un binome </title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<?php  include('Menu.php');?>
		<div class="container">
			<br>
			<form method="post" action="update_binome.php" class="form" enctype="multipart/form-data">
					
			<div class="panel panel-primary margetop">
				<div class="panel-heading">Editer Etudiant 1</div>
				<div class="panel-body">
					
						<div class="form-group">
							<label for="id" class="control-label" >id d'etudiant 1:
									<?php echo $etu['ID1']; ?>
							</label>
							<input type="hidden" name="ID1" 
									id="id" class="form-control" placeecholder="id"
									   value="<?php echo $etu['ID1']; ?>"/>
						</div>
						<div class="form-group">
							<label for="NOM" class="control-label">NOM:</label>
							<input type="text" name="NOM1" id="NOM" 
								placeecholder="NOM" class="form-control"
									value="<?php echo $etu['NOM1']; ?>"/>
						</div>
					
						
							<div class="form-group">
							<label for="PRENOM" class="control-label">PRENOM:</label>
							<input type="text" name="PRENOM1" id="PRENOM" 
								placeecholder="PRENOM" class="form-control"
									value="<?php echo $etu['PRENOM1']; ?>"/>
						</div>
						
						<div class="form-group">
							<label for="EMAIL" class="control-label">EMAIL:</label>
							<input type="text" name="EMAIL1" id="EMAIL" 
								placeecholder="EMAIL" class="form-control"
									value="<?php echo $etu['EMAIL1']; ?>"/>
						</div>
						
				</div>		
				
						
					
			</div>
			
			
			<div class="panel panel-primary margetop">
				<div class="panel-heading">Editer Etudiant 2</div>
				<div class="panel-body">
	
					
						<div class="form-group">
							<label for="id" class="control-label" >id d'etudiant 2:
									<?php echo $etu['ID2']; ?>
							</label>
							<input type="hidden" name="ID2" 
									id="id" class="form-control" placeecholder="id"
									       value="<?php echo $etu['ID2']; ?>"/>
						</div>
						<div class="form-group">
							<label for="NOM" class="control-label">NOM:</label>
							<input type="text" name="NOM2" id="NOM" 
								placeecholder="NOM" class="form-control"
									value="<?php echo $etu['NOM2']; ?>"/>
						</div>
					
						
							<div class="form-group">
							<label for="PRENOM" class="control-label">PRENOM:</label>
							<input type="text" name="PRENOM2" id="PRENOM" 
								placeecholder="PRENOM" class="form-control"
									value="<?php echo $etu['PRENOM2']; ?>"/>
						</div>
						
						<div class="form-group">
							<label for="EMAIL" class="control-label">EMAIL:</label>
							<input type="text" name="EMAIL2" id="EMAIL" 
								placeecholder="EMAIL" class="form-control"
									value="<?php echo $etu['EMAIL2']; ?>"/>
						</div>
						
						
					</div>
						</div>
					  
                     <div class="col-md-12">
               <!-- <input type="submit" class="btn btn-success btn-send" value="suivant" name="Enregistrer">-->
            
                    <button type="submit" value="suivant" name="Enregistrer" class="btn btn-primary">Enregistrer</button>
                   </div> 
		
		
			
			</form>
			
			
			
		</div>
	</body>
</html>